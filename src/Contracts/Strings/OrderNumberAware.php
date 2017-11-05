<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Order Number Aware</h1>
 *
 * Component is aware of a string "order number" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface OrderNumberAware
{
    /**
     * Set order number
     *
     * @param string|null $number Number that represents a purchase or order placed by a customer
     *
     * @return self
     */
    public function setOrderNumber(?string $number);

    /**
     * Get order number
     *
     * If no "order number" value has been set, this method will
     * set and return a default "order number" value,
     * if any such value is available
     *
     * @see getDefaultOrderNumber()
     *
     * @return string|null order number or null if no order number has been set
     */
    public function getOrderNumber() : ?string ;

    /**
     * Check if "order number" has been set
     *
     * @return bool True if "order number" has been set, false if not
     */
    public function hasOrderNumber() : bool;

    /**
     * Get a default "order number" value, if any is available
     *
     * @return string|null Default "order number" value or null if no default value is available
     */
    public function getDefaultOrderNumber() : ?string;
}