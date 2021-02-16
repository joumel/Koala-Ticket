<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'class' => 'login_input_full',
                    'placeholder' => 'Votre mot de passe',
                ],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d\'entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit avoir au moins {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

            ->add('firstname', TextType::class, [
                'attr' => [
                    'class' => 'login_input_full',
                    'placeholder' => 'Votre prénom',
                ],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de renseigner votre prénom',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre prénom doit contenir {{ limit }} caractères minimum',
                        'maxMessage' => 'Votre prénom ne peut contenir plus de {{ limit }} caractères',
                    ]),
                    ],
            ])

            ->add('lastname', TextType::class, [
                'attr' => [
                    'class' => 'login_input_full',
                    'placeholder' => 'Votre nom',
                ],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de renseigner votre Nom',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom doit contenir {{ limit }} caractères minimum',
                        'maxMessage' => 'Votre nom ne peut contenir plus de {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('email')
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez acceptez les conditions générales d\'utilisations',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'attr' => ['class' => 'login_form'],
        ]);
    }
}
