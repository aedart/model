<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Price Aware</h1>
 *
 * Component is aware of a string "price" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PriceAware
{
    /**
     * Set price
     *
     * @param string|null $amount Numeric price
     *
     * @return self
     */
    public function setPrice(?string $amount);

    /**
     * Get price
     *
     * If no "price" value has been set, this method will
     * set and return a default "price" value,
     * if any such value is available
     *
     * @see getDefaultPrice()
     *
     * @return string|null price or null if no price has been set
     */
    public function getPrice() : ?string ;

    /**
     * Check if "price" has been set
     *
     * @return bool True if "price" has been set, false if not
     */
    public function hasPrice() : bool;

    /**
     * Get a default "price" value, if any is available
     *
     * @return string|null Default "price" value or null if no default value is available
     */
    public function getDefaultPrice() : ?string;
}