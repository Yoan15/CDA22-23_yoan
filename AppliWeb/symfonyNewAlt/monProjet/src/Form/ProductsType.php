<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ProductName', TextType::class, [
                'label' => 'Nom du produit',
                'help' => 'Indiquez ici le nom complet du produit',
                'attr' => [
                    'placeholder' => 'Produit',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Caractère(s) non valide(s)'
                    ])
                ]
            ])
            ->add('CategoryID', TextType::class, [
                'label' => 'Id de la catégorie',
                
            ])
            ->add('QuantityPerUnit', TextType::class, [
                'label' => 'Quantité par unité',
                'attr' => [
                    'placeholder' => 'Quantité par unité',
                ],
            ])
            ->add('UnitPrice', TextType::class, [
                'label' => 'Prix Unitaire',
                'attr' => [
                    'placeholder' => 'Prix Unitaire',
                ],
            ])
            ->add('UnitsInStock', TextType::class, [
                'label' => 'Quantité en stock',
                'attr' => [
                    'placeholder' => 'Quantité en stock',
                ],
            ])
            ->add('UnitsOnOrder', TextType::class, [
                'label' => 'Quantité en commande',
                'attr' => [
                    'placeholder' => 'Quantité en commande',
                ],
            ])
            ->add('ReoderLevel', TextType::class, [
                'label' => 'Niveau d\'alerte',
                'attr' => [
                    'placeholder' => 'Niveau d\'alerte',
                ],
            ])
            ->add('Discontinued')
            ->add('SupplierID')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
