<?php namespace Aedart\Model\Contract\Integers;

/**
 * <h1>Discount Aware</h1>
 *
 * Component is aware of a int "discount" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contract\Integers
 */
interface DiscountAware
{
    /**
     * Set discount
     *
     * @param int $amount Discount amount
     *
     * @return void
     */
    public function setDiscount($amount);

    /**
     * Get discount
     *
     * If no "discount" value has been set, this method will
     * set and return a default "discount" value,
     * if any such value is available
     *
     * @see getDefaultDiscount()
     *
     * @return int|null "discount" value or null if no "discount" value has been set
     */
    public function getDiscount();

    /**
     * Get a default "discount" value, if any is available
     *
     * @return int|null A default "discount" value or null if no default value is available
     */
    public function getDefaultDiscount();

    /**
     * Check if "discount" has been set
     *
     * @return bool True if "discount" value has been set, false if not
     */
    public function hasDiscount();

    /**
     * Check if a default "discount" is available or not
     *
     * @return bool True of a default "discount" value is available, false if not
     */
    public function hasDefaultDiscount();
}