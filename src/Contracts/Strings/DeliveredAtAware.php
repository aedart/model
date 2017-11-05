<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Delivered At Aware</h1>
 *
 * Component is aware of a string "delivered at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DeliveredAtAware
{
    /**
     * Set delivered at
     *
     * @param string|null $date Date of delivery
     *
     * @return self
     */
    public function setDeliveredAt(?string $date);

    /**
     * Get delivered at
     *
     * If no "delivered at" value has been set, this method will
     * set and return a default "delivered at" value,
     * if any such value is available
     *
     * @see getDefaultDeliveredAt()
     *
     * @return string|null delivered at or null if no delivered at has been set
     */
    public function getDeliveredAt() : ?string ;

    /**
     * Check if "delivered at" has been set
     *
     * @return bool True if "delivered at" has been set, false if not
     */
    public function hasDeliveredAt() : bool;

    /**
     * Get a default "delivered at" value, if any is available
     *
     * @return string|null Default "delivered at" value or null if no default value is available
     */
    public function getDefaultDeliveredAt() : ?string;
}