<?php

namespace Aedart\Model\Contracts\Floats;

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
     * @param float|null $amount Numeric price
     *
     * @return self
     */
    public function setPrice(?float $amount);

    /**
     * Get price
     *
     * If no "price" value has been set, this method will
     * set and return a default "price" value,
     * if any such value is available
     *
     * @see getDefaultPrice()
     *
     * @return float|null price or null if no price has been set
     */
    public function getPrice() : ?float ;

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" has been set, false if not
     */
    public function hasPrice() : bool;

    /**
     * Get a default "price" value, if any is available
     *
     * @return float|null Default "price" value or null if no default value is available
     */
    public function getDefaultPrice() : ?float;
}