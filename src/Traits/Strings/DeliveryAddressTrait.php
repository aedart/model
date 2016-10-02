<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Delivery Address Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DeliveryAddressAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DeliveryAddressTrait
{
    /**
     * Delivery address. Can be formatted.
     *
     * @var string|null
     */
    protected $deliveryAddress = null;

    /**
     * Set delivery address
     *
     * @param string $address Delivery address. Can be formatted.
     *
     * @return void
     */
    public function setDeliveryAddress($address)
    {
        $this->deliveryAddress = (string) $address;
    }

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
    public function getDeliveryAddress()
    {
        if (!$this->hasDeliveryAddress() && $this->hasDefaultDeliveryAddress()) {
            $this->setDeliveryAddress($this->getDefaultDeliveryAddress());
        }
        return $this->deliveryAddress;
    }

    /**
     * Get a default "delivery address" value, if any is available
     *
     * @return string|null A default "delivery address" value or null if no default value is available
     */
    public function getDefaultDeliveryAddress()
    {
        return null;
    }

    /**
     * Check if "delivery address" has been set
     *
     * @return bool True if "delivery address" value has been set, false if not
     */
    public function hasDeliveryAddress()
    {
        return isset($this->deliveryAddress);
    }

    /**
     * Check if a default "delivery address" is available or not
     *
     * @return bool True of a default "delivery address" value is available, false if not
     */
    public function hasDefaultDeliveryAddress()
    {
        $default = $this->getDefaultDeliveryAddress();
        return isset($default);
    }
}