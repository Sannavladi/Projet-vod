<?php

namespace App\Form;

use DateTime;
use Doctrine\DBAL\Types\TimeType;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;


class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description', CKEditorType::class)
            ->add('duration', TimeType::class )
            ->add('publishedAt', DateTimeType::class, [
                'widget' =>'single_text',
                'data' => new \DateTimeImmutable(),
            ])
            // ->add('videoUrl')
            // ->add('slug')
            ->add('users')
            ->add('category', EntityType::class, [
                'class' => 'App\Entity\Category',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}


