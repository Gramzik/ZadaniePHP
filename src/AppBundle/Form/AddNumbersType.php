<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AddNumbersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('num1', IntegerType::class, ['label' => 'number1', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num2', IntegerType::class, ['label' => 'number2', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num3', IntegerType::class, ['label' => 'number3', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num4', IntegerType::class, ['label' => 'number4', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num5', IntegerType::class, ['label' => 'number5', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num6', IntegerType::class, ['label' => 'number6', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num7', IntegerType::class, ['label' => 'number7', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num8', IntegerType::class, ['label' => 'number8', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num9', IntegerType::class, ['label' => 'number9', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('num10', IntegerType::class, ['label' => 'number10', 'attr' => ['min' => 1,'max' => 99999]])
            ->add('save', SubmitType::class, ['label' => 'Send Numbers']);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
    }
}