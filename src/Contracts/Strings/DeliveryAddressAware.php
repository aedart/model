<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Delivery Address Aware</h1>
 *
 * Component is aware of a string "delivery address" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DeliveryAddressAware
{
    /**
     * Set delivery address
     *
     * @param string|null $address Delivery address
     *
     * @return self
     */
    public function setDeliveryAddress(?string $address);

    /**
     * Get delivery address
     *
     * If no "delivery address" value has been set, this method will
     * set and return a default "delivery address" value,
     * if any such value is available
     *
     * @see getDefaultDeliveryAddress()
     *
     * @return string|null delivery address or null if no delivery address has been set
     */
    public function getDeliveryAddress() : ?string ;

    /**
     * Check if "delivery address" has been set
     *
     * @return bool True if "delivery address" has been set, false if not
     */
    public function hasDeliveryAddress() : bool;

    /**
     * Get a default "delivery address" value, if any is available
     *
     * @return string|null Default "delivery address" value or null if no default value is available
     */
    public function getDefaultDeliveryAddress() : ?string;
}