<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Photo Aware</h1>
 *
 * Component is aware of a string "photo" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PhotoAware
{
    /**
     * Set photo
     *
     * @param string $location Path, Uri or other type of location to a photo
     *
     * @return void
     */
    public function setPhoto($location);

    /**
     * Get photo
     *
     * If no "photo" value has been set, this method will
     * set and return a default "photo" value,
     * if any such value is available
     *
     * @see getDefaultPhoto()
     *
     * @return string|null "photo" value or null if no "photo" value has been set
     */
    public function getPhoto();

    /**
     * Get a default "photo" value, if any is available
     *
     * @return string|null A default "photo" value or null if no default value is available
     */
    public function getDefaultPhoto();

    /**
     * Check if "photo" has been set
     *
     * @return bool True if "photo" value has been set, false if not
     */
    public function hasPhoto();

    /**
     * Check if a default "photo" is available or not
     *
     * @return bool True of a default "photo" value is available, false if not
     */
    public function hasDefaultPhoto();
}