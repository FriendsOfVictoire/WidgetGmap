<?php

namespace Victoire\Widget\GmapBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Victoire\Bundle\CoreBundle\Form\WidgetType;

/**
 * WidgetGmap form type.
 */
class WidgetGmapType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('latitude', null, [
                    'label' => 'widget_gmap.form.latitude.label',
            ])
            ->add('longitude', null, [
                    'label' => 'widget_gmap.form.longitude.label',
            ])
            ->add('hideMarker', null, [
                    'label'    => 'widget_gmap.form.hideMarker.label',
                    'required' => false,
            ])
            ->add('geolocation', null, [
                'label' => 'widget_gmap.form.geolocation.label',
            ])
            ->add('searchBox', null, [
                'label' => 'widget_gmap.form.searchBox.label',
            ])
            ->add('title', null, [
                'label'    => 'widget_gmap.form.title.label',
                'required' => false,
            ])
            ->add('kmlFile', null, [
                'label'    => 'widget_gmap.form.kmlFile.label',
                'required' => false,
            ])
            ->add('zoom', null, [
                    'label' => 'widget_gmap.form.zoom.label',
                    'attr'  => ['placeholder' => 'widget_gmap.form.zoom.placeholder'],
            ]);
        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\GmapBundle\Entity\WidgetGmap',
            'widget'             => 'Gmap',
            'translation_domain' => 'victoire',
            'enctype'            => 'multipart/form-data',
        ]);
    }
}
