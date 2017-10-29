<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Discount Aware</h1>
 *
 * Component is aware of a int "discount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DiscountAware
{
    /**
     * Set discount
     *
     * @param int|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?int $amount);

    /**
     * Get discount
     *
     * If no "discount" value has been set, this method will
     * set and return a default "discount" value,
     * if any such value is available
     *
     * @see getDefaultDiscount()
     *
     * @return int|null discount or null if no discount has been set
     */
    public function getDiscount() : ?int ;

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" has been set, false if not
     */
    public function hasDiscount() : bool;

    /**
     * Get a default "discount" value, if any is available
     *
     * @return int|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?int;
}