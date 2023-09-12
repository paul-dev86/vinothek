<?php

namespace App\Form;

use App\Entity\Vine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('grapeVarietyName', TextType::class, [
                'label' => 'Rebsorte',
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
            'data_class' => Vine::class,
        ]);
    }
}
