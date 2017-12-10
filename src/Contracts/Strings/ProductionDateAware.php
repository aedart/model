<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Production Date Aware</h1>
 *
 * Component is aware of a string "production date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ProductionDateAware
{
    /**
     * Set production date
     *
     * @param string|null $date Date of planned production
     *
     * @return self
     */
    public function setProductionDate(?string $date);

    /**
     * Get production date
     *
     * If no "production date" value has been set, this method will
     * set and return a default "production date" value,
     * if any such value is available
     *
     * @see getDefaultProductionDate()
     *
     * @return string|null production date or null if no production date has been set
     */
    public function getProductionDate() : ?string ;

    /**
     * Check if "production date" has been set
     *
     * @return bool True if "production date" has been set, false if not
     */
    public function hasProductionDate() : bool;

    /**
     * Get a default "production date" value, if any is available
     *
     * @return string|null Default "production date" value or null if no default value is available
     */
    public function getDefaultProductionDate() : ?string;
}