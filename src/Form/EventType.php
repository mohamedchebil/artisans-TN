<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('type', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('adresse', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('DateEvent', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('image', null, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('description', null, [
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
