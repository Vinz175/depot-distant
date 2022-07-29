<?php

namespace App\Form;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
            // ->add('picture')
            ->add('picture', FileType::class, [
                'label' => 'Photo du disque',
                //unmapped => fichier non associé à aucune propriété d'entité, validation impossible avec les annotations
                'mapped' => false,
                // pour éviter de recharger la photo lors de l'édition du profil
                'required' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '2000k',

                        'mimeTypesMessage' => 'Veuillez insérer une photo au format jpg, jpeg ou png'
                    ])
                ]
            ])
            ->add('label')
            ->add('genre')
            ->add('price', textType::class, [
                "label" => "Prix en €uros"])
            ->add('artist', EntityType::class, [
                // 'attr' => ['class' => 'form_control'],
                "class" => Artist::class,
                'query_builder' => function(ArtistRepository $art){
                    return $art->createQueryBuilder('artist')
                        ->orderBy('artist.name','asc');
                },
                "label" => "Artiste",
                "choice_label" => "name",
                'required' => true,    
                "help" => "Vous devez selectionner un artiste",
                
            ])
            ->add('promo', CheckboxType::class, [
                'label' => "Mise en avant",
                ]
            );

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
