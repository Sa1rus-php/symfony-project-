<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostForm  extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', TextType::class, [
                'required' => false,
                'label' => 'Name',
            ]);
        $builder->add('description', TextareaType::class);
        $builder->add('publishedAt', DateType::class, [
            'widget' => 'single_text',
        ]);

        $builder->add('submit', SubmitType::class);
    }

}
