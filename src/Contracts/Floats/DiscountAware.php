<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Discount Aware</h1>
 *
 * Component is aware of a float "discount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface DiscountAware
{
    /**
     * Set discount
     *
     * @param float|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?float $amount);

    /**
     * Get discount
     *
     * If no "discount" value has been set, this method will
     * set and return a default "discount" value,
     * if any such value is available
     *
     * @see getDefaultDiscount()
     *
     * @return float|null discount or null if no discount has been set
     */
    public function getDiscount() : ?float ;

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" has been set, false if not
     */
    public function hasDiscount() : bool;

    /**
     * Get a default "discount" value, if any is available
     *
     * @return float|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?float;
}