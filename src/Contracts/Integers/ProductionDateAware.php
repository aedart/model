<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Production Date Aware</h1>
 *
 * Component is aware of a int "production date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ProductionDateAware
{
    /**
     * Set production date
     *
     * @param int|null $date Date of planned production
     *
     * @return self
     */
    public function setProductionDate(?int $date);

    /**
     * Get production date
     *
     * If no "production date" value has been set, this method will
     * set and return a default "production date" value,
     * if any such value is available
     *
     * @see getDefaultProductionDate()
     *
     * @return int|null production date or null if no production date has been set
     */
    public function getProductionDate() : ?int ;

    /**
     * Check if "production date" has been set
     *
     * @return bool True if "production date" has been set, false if not
     */
    public function hasProductionDate() : bool;

    /**
     * Get a default "production date" value, if any is available
     *
     * @return int|null Default "production date" value or null if no default value is available
     */
    public function getDefaultProductionDate() : ?int;
}