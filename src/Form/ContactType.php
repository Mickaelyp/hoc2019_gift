<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom ',
                'attr' => ['placeholder' => 'votre nom', ]])
            ->add('Email', EmailType::class,[
                'attr' => ['placeholder' => 'votre email', ]])
           
            ->add('Message', TextareaType::class,[
                'attr' => 
                     ['placeholder' => 'votre message',
                'row' => '8'
            ]])
            ->add('send', SubmitType::class, [
                'label' => 'ENVOYER'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
