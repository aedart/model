<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Manufacturer Aware</h1>
 *
 * Component is aware of a string "manufacturer" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ManufacturerAware
{
    /**
     * Set manufacturer
     *
     * @param string|null $identifier Name or identifier of a manufacturer
     *
     * @return self
     */
    public function setManufacturer(?string $identifier);

    /**
     * Get manufacturer
     *
     * If no "manufacturer" value has been set, this method will
     * set and return a default "manufacturer" value,
     * if any such value is available
     *
     * @see getDefaultManufacturer()
     *
     * @return string|null manufacturer or null if no manufacturer has been set
     */
    public function getManufacturer() : ?string ;

    /**
     * Check if "manufacturer" has been set
     *
     * @return bool True if "manufacturer" has been set, false if not
     */
    public function hasManufacturer() : bool;

    /**
     * Get a default "manufacturer" value, if any is available
     *
     * @return string|null Default "manufacturer" value or null if no default value is available
     */
    public function getDefaultManufacturer() : ?string;
}