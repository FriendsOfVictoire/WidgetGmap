<?php

namespace Victoire\Widget\GmapBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;


/**
 * WidgetGmap form type
 */
class WidgetGmapType extends WidgetType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('latitude', null, array(
                    'label' => 'widget_gmap.form.latitude.label'
            ))
            ->add('longitude', null, array(
                    'label' => 'widget_gmap.form.longitude.label'
            ))
            ->add('title', null, array(
                    'label' => 'widget_gmap.form.title.label'
            ))
            ->add('zoom', null, array(
                    'label' => 'widget_gmap.form.zoom.label'
            ));
        parent::buildForm($builder, $options);

    }


    /**
     * bind form to WidgetGmap entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\GmapBundle\Entity\WidgetGmap',
            'widget'             => 'Gmap',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_gmap';
    }
}
