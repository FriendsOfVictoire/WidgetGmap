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
            ->add('hideMarker', null, array(
                    'label' => 'widget_gmap.form.hideMarker.label',
                    'required' => false,
            ))
            ->add('title', null, array(
                'label' => 'widget_gmap.form.title.label',
                'required' => false,
            ))
            ->add('kmlFile', null, array(
                'label' => 'widget_gmap.form.kmlFile.label',
                'required' => false
            ))
            ->add('zoom', null, array(
                    'label' => 'widget_gmap.form.zoom.label'
            ))
            ;
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
            'translation_domain' => 'victoire',
            'enctype'            => "multipart/form-data"
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
