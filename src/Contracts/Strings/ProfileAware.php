<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Profile Aware</h1>
 *
 * Component is aware of a string "profile" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ProfileAware
{
    /**
     * Set profile
     *
     * @param string|null $profile The profile or someone or something
     *
     * @return self
     */
    public function setProfile(?string $profile);

    /**
     * Get profile
     *
     * If no "profile" value has been set, this method will
     * set and return a default "profile" value,
     * if any such value is available
     *
     * @see getDefaultProfile()
     *
     * @return string|null profile or null if no profile has been set
     */
    public function getProfile() : ?string ;

    /**
     * Check if "profile" has been set
     *
     * @return bool True if "profile" has been set, false if not
     */
    public function hasProfile() : bool;

    /**
     * Get a default "profile" value, if any is available
     *
     * @return string|null Default "profile" value or null if no default value is available
     */
    public function getDefaultProfile() : ?string;
}