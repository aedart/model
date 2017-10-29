<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $location Path, Uri or other type of location to an image
     *
     * @return self
     */
    public function setImage(?string $location)
    {
        $this->image = $location;

        return $this;
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
     * @return string|null image or null if no image has been set
     */
    public function getImage() : ?string 
    {
        if ( ! $this->hasImage()) {
            $this->setImage($this->getDefaultImage());
        }
        return $this->image;
    }

    /**
     * Check if "image" has been set
     *
     * @return bool True if "image" has been set, false if not
     */
    public function hasImage() : bool
    {
        return isset($this->image);
    }

    /**
     * Get a default "image" value, if any is available
     *
     * @return string|null Default "image" value or null if no default value is available
     */
    public function getDefaultImage() : ?string
    {
        return null;
    }
}