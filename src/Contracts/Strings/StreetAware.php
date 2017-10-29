<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Street Aware</h1>
 *
 * Component is aware of a string "street" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface StreetAware
{
    /**
     * Set street
     *
     * @param string|null $address Full street address, which might include building or apartment number(s)
     *
     * @return self
     */
    public function setStreet(?string $address);

    /**
     * Get street
     *
     * If no "street" value has been set, this method will
     * set and return a default "street" value,
     * if any such value is available
     *
     * @see getDefaultStreet()
     *
     * @return string|null street or null if no street has been set
     */
    public function getStreet() : ?string ;

    /**
     * Check if "street" has been set
     *
     * @return bool True if "street" has been set, false if not
     */
    public function hasStreet() : bool;

    /**
     * Get a default "street" value, if any is available
     *
     * @return string|null Default "street" value or null if no default value is available
     */
    public function getDefaultStreet() : ?string;
}