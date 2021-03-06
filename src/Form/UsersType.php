<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21/03/2018
 * Time: 14:57
 */

namespace App\Form;


use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'required'=>true,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Nom'
                ]
            ])
            ->add('prenom',TextType::class,[
                'required'=>true,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Prénom'
                ]
            ])
            ->add('mail',EmailType::class,[
                'required'=>true,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Adresse email'
                ]
            ])
            ->add('password',PasswordType::class,[
                'required'=>true,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Mot de passe'
                ]
            ])
            ->add('submit',SubmitType::class,[
                'label'=>'S\'inscrire',
                'attr'=>[
                    'value'=>'S\'inscrire'
                ]
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=>Users::class,
        ));
    }
}