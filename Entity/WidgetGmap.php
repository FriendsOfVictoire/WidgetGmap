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
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="container_width_lg", type="string", length=255, nullable=true)
     */
    protected $containerWidthLG;
    /**
     * @var string
     *
     * @ORM\Column(name="container_width_md", type="string", length=255, nullable=true)
     */
    protected $containerWidthMD;
    /**
     * @var string
     *
     * @ORM\Column(name="container_width_sm", type="string", length=255, nullable=true)
     */
    protected $containerWidthSM;
    /**
     * @var string
     *
     * @ORM\Column(name="container_width_xs", type="string", length=255, nullable=true)
     */
    protected $containerWidthXS;
    /**
     * @var string
     *
     * @ORM\Column(name="container_height_lg", type="string", length=255, nullable=true)
     */
    protected $containerHeightLG;
    /**
     * @var string
     *
     * @ORM\Column(name="container_height_md", type="string", length=255, nullable=true)
     */
    protected $containerHeightMD;
    /**
     * @var string
     *
     * @ORM\Column(name="container_height_sm", type="string", length=255, nullable=true)
     */
    protected $containerHeightSM;
    /**
     * @var string
     *
     * @ORM\Column(name="container_height_xs", type="string", length=255, nullable=true)
     */
    protected $containerHeightXS;

/**
    * @var string
    *
    * @ORM\Column(name="container_height", type="string", length=255, nullable=true)
    */
    protected $containerHeight;
    /**
    * @var string
    *
    * @ORM\Column(name="container_width", type="string", length=255, nullable=true)
    */
    protected $containerWidth;
    /**
    * @return string
    */
    public function getContainerHeight()
    {
        return $this->containerHeight;
    }

    /**
    * @param string $containerHeight
    */
    public function setContainerHeight($containerHeight)
    {
        $this->containerHeight = $containerHeight;
    }

    /**
    * @return string
    */
    public function getContainerWidth()
    {
        return $this->containerWidth;
    }

    /**
    * @param string $containerWidth
    */
    public function setContainerWidth($containerWidth)
    {
        $this->containerWidth = $containerWidth;
    }

    /**
    * @return string
    */
    public function getContainerHeightLG()
    {
        return $this->containerHeightLG;
    }

    /**
    * @param string $containerHeightLG
    */
    public function setContainerHeightLG($containerHeightLG)
    {
        $this->containerHeightLG = $containerHeightLG;
    }

    /**
    * @return string
    */
    public function getContainerHeightMD()
    {
        return $this->containerHeightMD;
    }

    /**
    * @param string $containerHeightMD
    */
    public function setContainerHeightMD($containerHeightMD)
    {
        $this->containerHeightMD = $containerHeightMD;
    }

    /**
    * @return string
    */
    public function getContainerHeightSM()
    {
        return $this->containerHeightSM;
    }

    /**
    * @param string $containerHeightSM
    */
    public function setContainerHeightSM($containerHeightSM)
    {
        $this->containerHeightSM = $containerHeightSM;
    }

    /**
    * @return string
    */
    public function getContainerHeightXS()
    {
        return $this->containerHeightXS;
    }

    /**
    * @param string $containerHeightXS
    */
    public function setContainerHeightXS($containerHeightXS)
    {
        $this->containerHeightXS = $containerHeightXS;
    }

    /**
    * @return string
    */
    public function getContainerWidthLG()
    {
        return $this->containerWidthLG;
    }

    /**
    * @param string $containerWidthLG
    */
    public function setContainerWidthLG($containerWidthLG)
    {
        $this->containerWidthLG = $containerWidthLG;
    }

    /**
    * @return string
    */
    public function getContainerWidthMD()
    {
        return $this->containerWidthMD;
    }

    /**
    * @param string $containerWidthMD
    */
    public function setContainerWidthMD($containerWidthMD)
    {
        $this->containerWidthMD = $containerWidthMD;
    }

    /**
    * @return string
    */
    public function getContainerWidthSM()
    {
        return $this->containerWidthSM;
    }

    /**
    * @param string $containerWidthSM
    */
    public function setContainerWidthSM($containerWidthSM)
    {
        $this->containerWidthSM = $containerWidthSM;
    }

    /**
    * @return string
    */
    public function getContainerWidthXS()
    {
        return $this->containerWidthXS;
    }

    /**
    * @param string $containerWidthXS
    */
    public function setContainerWidthXS($containerWidthXS)
    {
        $this->containerWidthXS = $containerWidthXS;
    }

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
