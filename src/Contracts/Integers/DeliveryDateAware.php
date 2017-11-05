<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Delivery Date Aware</h1>
 *
 * Component is aware of a int "delivery date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DeliveryDateAware
{
    /**
     * Set delivery date
     *
     * @param int|null $date Date of planned delivery
     *
     * @return self
     */
    public function setDeliveryDate(?int $date);

    /**
     * Get delivery date
     *
     * If no "delivery date" value has been set, this method will
     * set and return a default "delivery date" value,
     * if any such value is available
     *
     * @see getDefaultDeliveryDate()
     *
     * @return int|null delivery date or null if no delivery date has been set
     */
    public function getDeliveryDate() : ?int ;

    /**
     * Check if "delivery date" has been set
     *
     * @return bool True if "delivery date" has been set, false if not
     */
    public function hasDeliveryDate() : bool;

    /**
     * Get a default "delivery date" value, if any is available
     *
     * @return int|null Default "delivery date" value or null if no default value is available
     */
    public function getDefaultDeliveryDate() : ?int;
}