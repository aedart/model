<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Delivery Date Aware</h1>
 *
 * Component is aware of a string "delivery date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DeliveryDateAware
{
    /**
     * Set delivery date
     *
     * @param string|null $date Date of planned delivery
     *
     * @return self
     */
    public function setDeliveryDate(?string $date);

    /**
     * Get delivery date
     *
     * If no "delivery date" value has been set, this method will
     * set and return a default "delivery date" value,
     * if any such value is available
     *
     * @see getDefaultDeliveryDate()
     *
     * @return string|null delivery date or null if no delivery date has been set
     */
    public function getDeliveryDate() : ?string ;

    /**
     * Check if "delivery date" has been set
     *
     * @return bool True if "delivery date" has been set, false if not
     */
    public function hasDeliveryDate() : bool;

    /**
     * Get a default "delivery date" value, if any is available
     *
     * @return string|null Default "delivery date" value or null if no default value is available
     */
    public function getDefaultDeliveryDate() : ?string;
}