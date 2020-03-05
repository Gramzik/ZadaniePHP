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
        $builder->setMethod('POST');
            for ($x = 1; $x <= 10; $x++) {
                $builder->add('num'.$x, IntegerType::class, ['label' => 'number'.$x, 'attr' => ['min' => 1,'max' => 99999],'required'=> false]);
            }
            $builder->add('save', SubmitType::class, ['label' => 'Send Numbers']);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
    }
}