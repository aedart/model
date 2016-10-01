<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Image Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ImageAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ImageTrait
{
    /**
     * Path, Uri or other type of location to an image
     *
     * @var string|null
     */
    protected $image = null;

    /**
     * Set image
     *
     * @param string $location Path, Uri or other type of location to an image
     *
     * @return void
     */
    public function setImage($location)
    {
        $this->image = (string) $location;
    }

    /**
     * Get image
     *
     * If no "image" value has been set, this method will
     * set and return a default "image" value,
     * if any such value is available
     *
     * @see getDefaultImage()
     *
     * @return string|null "image" value or null if no "image" value has been set
     */
    public function getImage()
    {
        if (!$this->hasImage() && $this->hasDefaultImage()) {
            $this->setImage($this->getDefaultImage());
        }
        return $this->image;
    }

    /**
     * Get a default "image" value, if any is available
     *
     * @return string|null A default "image" value or null if no default value is available
     */
    public function getDefaultImage()
    {
        return null;
    }

    /**
     * Check if "image" has been set
     *
     * @return bool True if "image" value has been set, false if not
     */
    public function hasImage()
    {
        return isset($this->image);
    }

    /**
     * Check if a default "image" is available or not
     *
     * @return bool True of a default "image" value is available, false if not
     */
    public function hasDefaultImage()
    {
        $default = $this->getDefaultImage();
        return isset($default);
    }
}