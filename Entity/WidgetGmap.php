<?php
namespace Victoire\Widget\GmapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Victoire\Bundle\CoreBundle\Annotations as VIC;

/**
 * WidgetGmap
 *
 * @ORM\Table("vic_widget_gmap")
 * @ORM\Entity
 */
class WidgetGmap extends Widget
{

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    protected $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    protected $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="zoom", type="string", length=255)
     */
    protected $zoom;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @VIC\ReceiverProperty("textable")
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
     *
     * @return String
     */
    public function __toString()
    {
        return 'Gmap #'.$this->id;
    }


    /**
     * Set latitude
     *
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set zoom
     *
     * @param string $zoom
     */
    public function setZoom($zoom)
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get zoom
     *
     * @return string
     */
    public function getZoom()
    {
        return $this->zoom;
    }

}
