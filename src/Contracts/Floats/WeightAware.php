<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Weight Aware</h1>
 *
 * Component is aware of a float "weight" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface WeightAware
{
    /**
     * Set weight
     *
     * @param float|null $amount Weight of something
     *
     * @return self
     */
    public function setWeight(?float $amount);

    /**
     * Get weight
     *
     * If no "weight" value has been set, this method will
     * set and return a default "weight" value,
     * if any such value is available
     *
     * @see getDefaultWeight()
     *
     * @return float|null weight or null if no weight has been set
     */
    public function getWeight() : ?float ;

    /**
     * Check if "weight" has been set
     *
     * @return bool True if "weight" has been set, false if not
     */
    public function hasWeight() : bool;

    /**
     * Get a default "weight" value, if any is available
     *
     * @return float|null Default "weight" value or null if no default value is available
     */
    public function getDefaultWeight() : ?float;
}