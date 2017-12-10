<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Quantity Aware</h1>
 *
 * Component is aware of a float "quantity" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface QuantityAware
{
    /**
     * Set quantity
     *
     * @param float|null $quantity The quantity of something
     *
     * @return self
     */
    public function setQuantity(?float $quantity);

    /**
     * Get quantity
     *
     * If no "quantity" value has been set, this method will
     * set and return a default "quantity" value,
     * if any such value is available
     *
     * @see getDefaultQuantity()
     *
     * @return float|null quantity or null if no quantity has been set
     */
    public function getQuantity() : ?float ;

    /**
     * Check if "quantity" has been set
     *
     * @return bool True if "quantity" has been set, false if not
     */
    public function hasQuantity() : bool;

    /**
     * Get a default "quantity" value, if any is available
     *
     * @return float|null Default "quantity" value or null if no default value is available
     */
    public function getDefaultQuantity() : ?float;
}