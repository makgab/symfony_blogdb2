<?php
// src/Form/Type/BlogType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('post', TextType::class)
            ->add('date', DateType::class)
            ->add('categoryid', EntityType::class, [
                'class' => Category::class,
                // the visible option string
                'choice_label' => 'category', 
             ])
            ->add('save', SubmitType::class)
        ;
    }
}



?>
