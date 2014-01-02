<?php

namespace iim\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')

            ->add('title', null, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('content', null, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('pate', null, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('image')
            ->add('enabled')
            ->add('author')

        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'iim\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'article';
    }
}
