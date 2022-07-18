<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add("nom")
            ->add("nom", TextType::class, [
                "label" => "Nom",
                "attr" => [
                    "placeholder" => "Votre nom",
                ],
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez votre Nom",
                    ]),
                    new Regex ([
                        "pattern" => '/^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$/',
                        "message" => "Caractères non valide(s)"
                    ])
                ]
            ])
            // ->add("prenom")
            ->add("prenom", TextType::class, [
                "label" => "Prénom",
                "attr" => [
                    "placeholder" => "Votre prénom",
                ],
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez votre Nom",
                    ]),
                    new Regex ([
                        "pattern" => '/^([A-Z]|[a-z])[a-z]*(-)?[a-z]+$/',
                        "message" => "Caractères non valide(s)"
                    ])
                ]
            ])
            ->add ("dob", DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
            ])
            // ->add('email')
            ->add("email", EmailType::class, [
                "attr" => [
                    "placeholder" => "Votre Email"
                ],
                "constraints" => [
                    new Regex ([
                        "pattern" => '/^[A-Za-z0-9.-]+@[A-Za-z0-9.-]{2,}.[a-z]{2,4}$/',
                        "message" => "Email non valide"
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                "label" => "Mot de passe",
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('adress')
            ->add('codePostal')
            // ->add('codePostal', TextType::class, [
            //     "constraints" => [
            //         new NotBlank([
            //             "message" => "Entrez le site officiel de l'artiste",
            //         ])
            //     ]
            // ])
            ->add('ville')
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
