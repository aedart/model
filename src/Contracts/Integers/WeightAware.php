<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Weight Aware</h1>
 *
 * Component is aware of a int "weight" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface WeightAware
{
    /**
     * Set weight
     *
     * @param int|null $amount Weight of something
     *
     * @return self
     */
    public function setWeight(?int $amount);

    /**
     * Get weight
     *
     * If no "weight" value has been set, this method will
     * set and return a default "weight" value,
     * if any such value is available
     *
     * @see getDefaultWeight()
     *
     * @return int|null weight or null if no weight has been set
     */
    public function getWeight() : ?int ;

    /**
     * Check if "weight" has been set
     *
     * @return bool True if "weight" has been set, false if not
     */
    public function hasWeight() : bool;

    /**
     * Get a default "weight" value, if any is available
     *
     * @return int|null Default "weight" value or null if no default value is available
     */
    public function getDefaultWeight() : ?int;
}