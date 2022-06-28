<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
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
            ->add('email', EmailType::class,[
                "constraints" => [
                    new NotBlank([
                        "message" => "Entrez votre email",
                    ])
                ]
            ])
            ->add('password')
            ->add('role', ChoiceType::class,[
                "choices" =>(array)$roles,
                "multiple" => true,
                "label" => "Rôle"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
