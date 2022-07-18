<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $roles = array(
            "user"=>"ROLE_USER",
            "admin"=>"ROLE_ADMIN"
        );

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
                    // new Regex ([
                    //     "pattern" => "",
                    //     "message" => "Caractères non valide(s)"
                    // ])
                ]
            ])
            // ->add("prenom")
            ->add("prenom", TextType::class, [
                "label" => "Prénom",
                "attr" => [
                    "placeholder" => "Votre nom",
                ],
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez votre Nom",
                    ])
                ]
            ])
            ->add ("dob")
// Unable to transform value for property path "dob": Expected a \DateTimeInterface.
            // ->add ("dob", DateType::class, [
            //     'widget' => 'single_text',
            //     // this is actually the default format for single_text
            //     'format' => 'yyyy-MM-dd',
            //     "label" => "Date de naissance",
            // ])
            ->add('email', EmailType::class,[
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez votre email",
                    ])
                ]
            ])
            ->add('password')
            // ->add('plainPassword', PasswordType::class, [
            //     // instead of being set onto the object directly,
            //     // this is read and encoded in the controller
            //     'mapped' => false,
            //     'attr' => ['autocomplete' => 'new-password'],
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Please enter a password',
            //         ]),
            //         new Length([
            //             'min' => 6,
            //             'minMessage' => 'Your password should be at least {{ limit }} characters',
            //             // max length allowed by Symfony for security reasons
            //             'max' => 4096,
            //         ]),
            //     ],
            // ])
            ->add('adress')
            ->add('codePostal', TextType::class, [
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez le site officiel de l'artiste",
                    ])
                ]
            ])
            ->add('ville')
            ->add('roles', ChoiceType::class,[
                "choices" =>(array)$roles,
                "multiple" => true,
                "label" => "Rôle"
            ])
            ->add('isVerified')
;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
