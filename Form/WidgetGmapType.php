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
                    'label' => 'widget_gmap.form.title.label',
                    'required' => false,
            ))
            ->add('zoom', null, array(
                    'label' => 'widget_gmap.form.zoom.label'
            ))
            ->add('containerWidthLG', null, array(
                    'label' => 'widget_gmap.form.containerWidthLG.label'
            ))
            ->add('containerWidthMD', null, array(
                    'label' => 'widget_gmap.form.containerWidthMD.label'
            ))
            ->add('containerWidthSM', null, array(
                    'label' => 'widget_gmap.form.containerWidthSM.label'
            ))
            ->add('containerWidthXS', null, array(
                    'label' => 'widget_gmap.form.containerWidthXS.label'
            ))
            ->add('containerHeightLG', null, array(
                    'label' => 'widget_gmap.form.containerHeightLG.label'
            ))
            ->add('containerHeightMD', null, array(
                    'label' => 'widget_gmap.form.containerHeightMD.label'
            ))
            ->add('containerHeightSM', null, array(
                    'label' => 'widget_gmap.form.containerHeightSM.label'
            ))
            ->add('containerHeightXS', null, array(
                    'label' => 'widget_gmap.form.containerHeightXS.label'
            ))
            ->add('containerHeight', null, array(
                    'label' => 'widget_gmap.form.containerHeight.label'
            ))
            ->add('containerWidth', null, array(
                    'label' => 'widget_gmap.form.containerWidth.label'
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
