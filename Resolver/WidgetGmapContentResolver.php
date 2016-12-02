<?php

namespace Victoire\Widget\GmapBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

/**
 * Class WidgetGmapContentResolver
 */
class WidgetGmapContentResolver extends BaseWidgetContentResolver
{
    protected $gmapApiKey;

    /**
     * WidgetGmapContentResolver constructor.
     *
     * @param $gmapApiKey
     */
    public function __construct($gmapApiKey)
    {
        $this->gmapApiKey = $gmapApiKey;
    }

    /**
     * @param Widget $widget
     * @return mixed
     */
    public function getWidgetStaticContent(Widget $widget)
    {
        $parameters = parent::getWidgetStaticContent($widget);
        $parameters['gmapApiKey'] = $this->gmapApiKey;

        return $parameters;
    }
}
