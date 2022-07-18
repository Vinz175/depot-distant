<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $roles = array(
            "user"=>"ROLE_USER",
            "admin"=>"ROLE_ADMIN"
        );


        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dob')
                            // erreur Unable to transform value for property path "dob": Expected a \DateTimeInterface.
                            // ->add ("dob", DateType::class, [
                            //     'widget' => 'single_text',
                            //     // this is actually the default format for single_text
                            //     'format' => 'yyyy-MM-dd',
                            // ])
            ->add('email')
            ->add('roles', ChoiceType::class,[
                "choices" =>(array)$roles,
                "multiple" => true,
                "label" => "Rôle"
            ])     
            ->add('password')
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
