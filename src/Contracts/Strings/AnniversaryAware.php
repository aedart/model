<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Anniversary Aware</h1>
 *
 * Component is aware of a string "anniversary" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AnniversaryAware
{
    /**
     * Set anniversary
     *
     * @param string|null $anniversary Date of anniversary
     *
     * @return self
     */
    public function setAnniversary(?string $anniversary);

    /**
     * Get anniversary
     *
     * If no "anniversary" value has been set, this method will
     * set and return a default "anniversary" value,
     * if any such value is available
     *
     * @see getDefaultAnniversary()
     *
     * @return string|null anniversary or null if no anniversary has been set
     */
    public function getAnniversary() : ?string ;

    /**
     * Check if "anniversary" has been set
     *
     * @return bool True if "anniversary" has been set, false if not
     */
    public function hasAnniversary() : bool;

    /**
     * Get a default "anniversary" value, if any is available
     *
     * @return string|null Default "anniversary" value or null if no default value is available
     */
    public function getDefaultAnniversary() : ?string;
}