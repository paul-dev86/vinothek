<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Company;
use App\Entity\Product;
use App\Entity\Region;
use App\Entity\Vine;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('productName', TextType::class, [
                'label' => 'Produktname'
            ])
            ->add('productInfo', TextareaType::class, [
                'label' => 'Beschreibung',
                'attr' => [
                    'height' => '120px'
                ]
            ])
            ->add('productPrice', MoneyType::class, [
                'label' => 'Einkaufsreis'
            ])
            ->add('retailPrice', MoneyType::class, [
                'label' => 'Verkaufspreis'
            ])
            ->add('weight', NumberType::class, [
                'input' => 'string',
                'label' => 'Produktgewicht'
            ])
            ->add('productNumber', NumberType::class, [
                'label' => 'ArtikelNr'
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'label' => 'Kategorie'
            ])
            ->add('company', EntityType::class, [
                'class' => Company::class,
                'label' => 'Hersteller'
            ])
            ->add('country', CountryType::class, [
                'label' => 'Land'
            ])
            ->add('region', EntityType::class, [
                'class' => Region::class,
                'label' => 'Region'
            ])
            ->add('vine', EntityType::class, [
                'class' => Vine::class,
                'label' => 'Rebsorte'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Speichern'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
