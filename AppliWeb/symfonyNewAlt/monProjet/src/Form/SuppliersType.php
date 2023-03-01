<?php

namespace App\Form;

use App\Entity\Suppliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuppliersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CompanyName')
            ->add('ContactName')
            ->add('ContactTitle')
            ->add('Address')
            ->add('City')
            ->add('Region')
            ->add('PostalCode')
            ->add('Country')
            ->add('Phone')
            ->add('Fax')
            ->add('HomePage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Suppliers::class,
        ]);
    }
}
