<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Sujet',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci d\'entrer le titre du Ticket',
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le titre du ticket doit avoir au moins {{ limit }} caratères',
                        // max length allowed by Symfony for security reasons
                        'max' => 50,
                        'maxMessage' => 'Le titre du ticket ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('content', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Description',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de renseigner le contenu du Ticket',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 5000,
                        'minMessage' => 'Le contenu du Ticket doit contenir {{ limit }} caractères au minimum',
                        'maxMessage' => 'le contenu du Ticket ne peut contenir plus de {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('level', ChoiceType::class, [
                'label' =>false,
                'choices' => [
                    'Normal' => '1',
                    'Moyenne' => '2',
                    'Élevée' => '3',
                    'Urgent' => '4',
                    'Critique' => '5',
                ],
            ])

            ->add('department', ChoiceType::class, [
                'label' =>false,
                'choices' => [
                    'Service commercial' => 'commercial',
                    'Service marketing' => 'marketing',
                    'Support technique' => 'technique',
                ],
            ])

            ->add('statement', HiddenType::class, [
                'label' =>false,
                'attr' => [
                    'value' => 'en attente',
                ],
            ])

            ->add('save', SubmitType::class, [ // Ajout d'un champ de type bouton de validation
                'label' => 'Créer un Ticket'    // Texte du bouton
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
