<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $location Path, Uri or other type of location to a logo
     *
     * @return self
     */
    public function setLogo(?string $location);

    /**
     * Get logo
     *
     * If no "logo" value has been set, this method will
     * set and return a default "logo" value,
     * if any such value is available
     *
     * @see getDefaultLogo()
     *
     * @return string|null logo or null if no logo has been set
     */
    public function getLogo() : ?string ;

    /**
     * Check if "logo" has been set
     *
     * @return bool True if "logo" has been set, false if not
     */
    public function hasLogo() : bool;

    /**
     * Get a default "logo" value, if any is available
     *
     * @return string|null Default "logo" value or null if no default value is available
     */
    public function getDefaultLogo() : ?string;
}