<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Discount Aware</h1>
 *
 * Component is aware of a string "discount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DiscountAware
{
    /**
     * Set discount
     *
     * @param string|null $amount Discount amount
     *
     * @return self
     */
    public function setDiscount(?string $amount);

    /**
     * Get discount
     *
     * If no "discount" value has been set, this method will
     * set and return a default "discount" value,
     * if any such value is available
     *
     * @see getDefaultDiscount()
     *
     * @return string|null discount or null if no discount has been set
     */
    public function getDiscount() : ?string ;

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" has been set, false if not
     */
    public function hasDiscount() : bool;

    /**
     * Get a default "discount" value, if any is available
     *
     * @return string|null Default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount() : ?string;
}