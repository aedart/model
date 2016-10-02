<?php namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Price Aware</h1>
 *
 * Component is aware of a float "price" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface PriceAware
{
    /**
     * Set price
     *
     * @param float $price Price of something
     *
     * @return void
     */
    public function setPrice($price);

    /**
     * Get price
     *
     * If no "price" value has been set, this method will
     * set and return a default "price" value,
     * if any such value is available
     *
     * @see getDefaultPrice()
     *
     * @return float|null "price" value or null if no "price" value has been set
     */
    public function getPrice();

    /**
     * Get a default "price" value, if any is available
     *
     * @return float|null A default "price" value or null if no default value is available
     */
    public function getDefaultPrice();

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" value has been set, false if not
     */
    public function hasPrice();

    /**
     * Check if a default "price" is available or not
     *
     * @return bool True of a default "price" value is available, false if not
     */
    public function hasDefaultPrice();
}