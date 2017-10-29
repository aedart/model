<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $location Path, Uri or other type of location to an image
     *
     * @return self
     */
    public function setImage(?string $location);

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
    public function getImage() : ?string ;

    /**
     * Check if "image" has been set
     *
     * @return bool True if "image" has been set, false if not
     */
    public function hasImage() : bool;

    /**
     * Get a default "image" value, if any is available
     *
     * @return string|null Default "image" value or null if no default value is available
     */
    public function getDefaultImage() : ?string;
}