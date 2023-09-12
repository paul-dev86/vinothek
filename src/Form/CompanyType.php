<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Hersteller',
                'attr' => [
                    'class' => 'input-data'
                ]
            ])
            ->add('street',TextType::class, [
                'label' => 'Straße Nr.',
                'attr' => [
                    'class' => 'input-data'
                ]
            ])
            ->add('postCode', TextType::class, [
                'label' => 'PLZ',
                'attr' => [
                    'class' => 'input-data'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Stadt',
                'attr' => [
                    'class' => 'input-data'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Speichern',
                'attr' => [
                    'class' => 'submit-btn'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
