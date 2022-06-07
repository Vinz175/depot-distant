<?php

namespace App\Form;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Title', TextType::class, [
            'label' => 'Nom du disque',
            'attr' => [
                'placeholder' => 'Nom du disque',
            ],
            'constraints' => [
                new Regex([
                    'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                    'message' => 'Caratère(s) non valide(s)'
                ]),
            ],
            'help' => 'Vous devez rentrer le nom du disque ici',
        ])
        
            ->add('year', TextType::class, [
                "label" => "Année du disque",
                "attr" => [
                    "placeholder" => "année",
                ],
                "constraints" => [
                new Regex ([
                    "pattern" => "/^(19|20)[\d]{2,2}$/",
                    "message" => "caractère(s) non valide(s)"
                ])
            ],
            "help" => "Vous devez entrer l'année du disque ici",
            ])



            ->add('picture')
            ->add('label')
            ->add('price')
            ->add('artist', EntityType::class, [
                // 'attr' => ['class' => 'form_control'],
                "class" => Artist::class,
                'query_builder' => function(ArtistRepository $art){
                    return $art->createQueryBuilder('artist')
                        ->orderBy('artist.name','asc');
                },
                "choice_label" => "name",
                'required' => true,    
                "help" => "Vous devez selectionner un artiste",
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
