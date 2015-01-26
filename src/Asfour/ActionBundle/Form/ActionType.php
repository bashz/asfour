<?php

namespace Asfour\ActionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('locale')
            ->add('date')
            //->add('slug')
            ->add('preambule')
            ->add('body')
            ->add('facts')
            ->add('is_active')
            ->add('place')
            //->add('created')
            //->add('updated')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Asfour\ActionBundle\Entity\Action'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'asfour_actionbundle_action';
    }
}
