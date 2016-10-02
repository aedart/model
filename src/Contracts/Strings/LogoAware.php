<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Logo Aware</h1>
 *
 * Component is aware of a string "logo" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LogoAware
{
    /**
     * Set logo
     *
     * @param string $location Path, Uri or other type of location to a logo
     *
     * @return void
     */
    public function setLogo($location);

    /**
     * Get logo
     *
     * If no "logo" value has been set, this method will
     * set and return a default "logo" value,
     * if any such value is available
     *
     * @see getDefaultLogo()
     *
     * @return string|null "logo" value or null if no "logo" value has been set
     */
    public function getLogo();

    /**
     * Get a default "logo" value, if any is available
     *
     * @return string|null A default "logo" value or null if no default value is available
     */
    public function getDefaultLogo();

    /**
     * Check if "logo" has been set
     *
     * @return bool True if "logo" value has been set, false if not
     */
    public function hasLogo();

    /**
     * Check if a default "logo" is available or not
     *
     * @return bool True of a default "logo" value is available, false if not
     */
    public function hasDefaultLogo();
}