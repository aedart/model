<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $address Delivery address. Can be formatted.
     *
     * @return void
     */
    public function setDeliveryAddress($address);

    /**
     * Get delivery address
     *
     * If no "delivery address" value has been set, this method will
     * set and return a default "delivery address" value,
     * if any such value is available
     *
     * @see getDefaultDeliveryAddress()
     *
     * @return string|null "delivery address" value or null if no "delivery address" value has been set
     */
    public function getDeliveryAddress();

    /**
     * Get a default "delivery address" value, if any is available
     *
     * @return string|null A default "delivery address" value or null if no default value is available
     */
    public function getDefaultDeliveryAddress();

    /**
     * Check if "delivery address" has been set
     *
     * @return bool True if "delivery address" value has been set, false if not
     */
    public function hasDeliveryAddress();

    /**
     * Check if a default "delivery address" is available or not
     *
     * @return bool True of a default "delivery address" value is available, false if not
     */
    public function hasDefaultDeliveryAddress();
}