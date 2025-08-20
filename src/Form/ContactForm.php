<?php

namespace App\Form;

use App\Entity\Contacts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom' , TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Dupont'
                ]
            ])
            ->add('prenom' , TextType::class, [
                'label' => 'Votre prénom',
                'attr' => [
                    'placeholder' => 'Jean'
                ]
            ])
            ->add('email', EmailType::class, [ // Utiliser EmailType pour la validation
                'label' => 'Votre adresse email',
                'attr' => [
                    'placeholder' => 'jean.dupont@exemple.com'
                ]
            ])
            ->add('message' , TextareaType::class, [
                'label' => 'Votre message',
                'attr' => [
                    'placeholder' => 'Bonjour, je souhaiterais proposer une nouvelle table de jeu...',
                    'rows' => 8
                ]  
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contacts::class,
        ]);
    }
}