<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Price Aware</h1>
 *
 * Component is aware of a int "price" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface PriceAware
{
    /**
     * Set price
     *
     * @param int|null $amount Numeric price
     *
     * @return self
     */
    public function setPrice(?int $amount);

    /**
     * Get price
     *
     * If no "price" value has been set, this method will
     * set and return a default "price" value,
     * if any such value is available
     *
     * @see getDefaultPrice()
     *
     * @return int|null price or null if no price has been set
     */
    public function getPrice() : ?int ;

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" has been set, false if not
     */
    public function hasPrice() : bool;

    /**
     * Get a default "price" value, if any is available
     *
     * @return int|null Default "price" value or null if no default value is available
     */
    public function getDefaultPrice() : ?int;
}