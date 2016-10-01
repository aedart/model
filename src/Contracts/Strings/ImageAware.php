<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Image Aware</h1>
 *
 * Component is aware of a string "image" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ImageAware
{
    /**
     * Set image
     *
     * @param string $location Path, Uri or other type of location to an image
     *
     * @return void
     */
    public function setImage($location);

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
    public function getImage();

    /**
     * Get a default "image" value, if any is available
     *
     * @return string|null A default "image" value or null if no default value is available
     */
    public function getDefaultImage();

    /**
     * Check if "image" has been set
     *
     * @return bool True if "image" value has been set, false if not
     */
    public function hasImage();

    /**
     * Check if a default "image" is available or not
     *
     * @return bool True of a default "image" value is available, false if not
     */
    public function hasDefaultImage();
}