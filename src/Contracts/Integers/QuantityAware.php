<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Quantity Aware</h1>
 *
 * Component is aware of a int "quantity" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface QuantityAware
{
    /**
     * Set quantity
     *
     * @param int|null $quantity The quantity of something
     *
     * @return self
     */
    public function setQuantity(?int $quantity);

    /**
     * Get quantity
     *
     * If no "quantity" value has been set, this method will
     * set and return a default "quantity" value,
     * if any such value is available
     *
     * @see getDefaultQuantity()
     *
     * @return int|null quantity or null if no quantity has been set
     */
    public function getQuantity() : ?int ;

    /**
     * Check if "quantity" has been set
     *
     * @return bool True if "quantity" has been set, false if not
     */
    public function hasQuantity() : bool;

    /**
     * Get a default "quantity" value, if any is available
     *
     * @return int|null Default "quantity" value or null if no default value is available
     */
    public function getDefaultQuantity() : ?int;
}