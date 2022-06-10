<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $roles = array(
            "user"=>"ROLE_USER",
            "admin"=>"ROLE_ADMIN"
        );

        $builder
        ->add('email')
        ->add('roles', ChoiceType::class,[
            'choices' => $roles,
            'multiple' => true
        ]);
    }
}