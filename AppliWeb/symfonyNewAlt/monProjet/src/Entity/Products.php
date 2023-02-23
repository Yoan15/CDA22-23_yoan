<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $CategoryID;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $QuantityPerUnit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=4, nullable=true, options={default: 0.0000})
     */
    private $UnitPrice;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $UnitsInStock;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $UnitsOnOrder;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $ReoderLevel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Discontinued;

    /**
     * @ORM\ManyToOne(targetEntity=Suppliers::class, inversedBy="products")
     */
    private $SupplierID;

    /**
     * @ORM\OneToMany(targetEntity=OrderDetails::class, mappedBy="ProductID")
     */
    private $orderDetails;

    public function __construct()
    {
        $this->orderDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }

    public function setCategoryID(?int $CategoryID): self
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    public function getQuantityPerUnit(): ?string
    {
        return $this->QuantityPerUnit;
    }

    public function setQuantityPerUnit(?string $QuantityPerUnit): self
    {
        $this->QuantityPerUnit = $QuantityPerUnit;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->UnitPrice;
    }

    public function setUnitPrice(?string $UnitPrice): self
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    public function getUnitsInStock(): ?int
    {
        return $this->UnitsInStock;
    }

    public function setUnitsInStock(?int $UnitsInStock): self
    {
        $this->UnitsInStock = $UnitsInStock;

        return $this;
    }

    public function getUnitsOnOrder(): ?int
    {
        return $this->UnitsOnOrder;
    }

    public function setUnitsOnOrder(?int $UnitsOnOrder): self
    {
        $this->UnitsOnOrder = $UnitsOnOrder;

        return $this;
    }

    public function getReoderLevel(): ?int
    {
        return $this->ReoderLevel;
    }

    public function setReoderLevel(?int $ReoderLevel): self
    {
        $this->ReoderLevel = $ReoderLevel;

        return $this;
    }

    public function isDiscontinued(): ?bool
    {
        return $this->Discontinued;
    }

    public function setDiscontinued(bool $Discontinued): self
    {
        $this->Discontinued = $Discontinued;

        return $this;
    }

    public function getSupplierID(): ?Suppliers
    {
        return $this->SupplierID;
    }

    public function setSupplierID(?Suppliers $SupplierID): self
    {
        $this->SupplierID = $SupplierID;

        return $this;
    }

    /**
     * @return Collection<int, OrderDetails>
     */
    public function getOrderDetails(): Collection
    {
        return $this->orderDetails;
    }

    public function addOrderDetail(OrderDetails $orderDetail): self
    {
        if (!$this->orderDetails->contains($orderDetail)) {
            $this->orderDetails[] = $orderDetail;
            $orderDetail->setProductID($this);
        }

        return $this;
    }

    public function removeOrderDetail(OrderDetails $orderDetail): self
    {
        if ($this->orderDetails->removeElement($orderDetail)) {
            // set the owning side to null (unless already changed)
            if ($orderDetail->getProductID() === $this) {
                $orderDetail->setProductID(null);
            }
        }

        return $this;
    }
}
