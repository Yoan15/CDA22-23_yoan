<?php

namespace App\Entity;

use App\Repository\CustomersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomersRepository::class)
 */
class Customers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="string", length=5)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $CompanyName;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $ContactName;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $ContactTitle;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $PostalCode;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=24, nullable=true)
     */
    private $Phone;

    /**
     * @ORM\Column(type="string", length=24, nullable=true)
     */
    private $Fax;

    /**
     * @ORM\OneToMany(targetEntity=Orders::class, mappedBy="CustomerID")
     */
    private $orders;

    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): self
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    public function setContactName(?string $ContactName): self
    {
        $this->ContactName = $ContactName;

        return $this;
    }

    public function getContactTitle(): ?string
    {
        return $this->ContactTitle;
    }

    public function setContactTitle(?string $ContactTitle): self
    {
        $this->ContactTitle = $ContactTitle;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(?string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(?string $Region): self
    {
        $this->Region = $Region;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }

    public function setPostalCode(?string $PostalCode): self
    {
        $this->PostalCode = $PostalCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(?string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone;
    }

    public function setPhone(?string $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->Fax;
    }

    public function setFax(?string $Fax): self
    {
        $this->Fax = $Fax;

        return $this;
    }

    /**
     * @return Collection<int, Orders>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Orders $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->setCustomerID($this);
        }

        return $this;
    }

    public function removeOrder(Orders $order): self
    {
        if ($this->orders->removeElement($order)) {
            // set the owning side to null (unless already changed)
            if ($order->getCustomerID() === $this) {
                $order->setCustomerID(null);
            }
        }

        return $this;
    }
}
