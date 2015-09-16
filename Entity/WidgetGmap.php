<?php
namespace Victoire\Widget\GmapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Symfony\Component\Validator\Constraints AS Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * WidgetGmap
 *
 * @ORM\Table("vic_widget_gmap")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\Column(name="hideMarker", type="boolean", nullable=true)
     */
    protected $hideMarker;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $pathToKml;
    /**
     * @Assert\File(
     *     mimeTypes = {"application/xml"},
     *     mimeTypesMessage = "Choose a KML file"
     * )
     */
    public $kmlFile;

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


    /**
     * Set hideMarker
     *
     * @param string $hideMarker
     */
    public function setHideMarker($hideMarker)
    {
        $this->hideMarker = $hideMarker;

        return $this;
    }

    /**
     * Get hideMarker
     *
     * @return string
     */
    public function isHideMarker()
    {
        return $this->hideMarker;
    }

    public function getAbsoluteKmlPath()
    {
        return null === $this->pathToKml ? null : $this->getUploadRootDir().'/'.$this->pathToKml;
    }

    public function getWebKmlPath()
    {
        return null === $this->pathToKml ? null : $this->getUploadDir().'/'.$this->pathToKml;
    }

    protected function getUploadRootDir()
    {
        $dir = __DIR__.'/../../../../../../../web/'.$this->getUploadDir();
        if(!file_exists($dir)){
            mkdir(__DIR__.'/../../../../../../../web/'.$this->getUploadDir(), 0777);
        }
        return $dir;
    }

    protected function getUploadDir()
    {
        return 'uploads/maps';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->kmlFile) {
            $this->pathToKml = sha1(uniqid(mt_rand(), true)).'.kml';
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->kmlFile) {
            return;
        }
        $this->kmlFile->move($this->getUploadRootDir(), $this->pathToKml);

        unset($this->kmlFile);
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsoluteKmlPath()) {
            unlink($file);
        }
    }
}
