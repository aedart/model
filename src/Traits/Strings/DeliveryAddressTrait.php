<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Delivery address
     *
     * @var string|null
     */
    protected $deliveryAddress = null;

    /**
     * Set delivery address
     *
     * @param string|null $address Delivery address
     *
     * @return self
     */
    public function setDeliveryAddress(?string $address)
    {
        $this->deliveryAddress = $address;

        return $this;
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
     * @return string|null delivery address or null if no delivery address has been set
     */
    public function getDeliveryAddress() : ?string 
    {
        if ( ! $this->hasDeliveryAddress()) {
            $this->setDeliveryAddress($this->getDefaultDeliveryAddress());
        }
        return $this->deliveryAddress;
    }

    /**
     * Check if "delivery address" has been set
     *
     * @return bool True if "delivery address" has been set, false if not
     */
    public function hasDeliveryAddress() : bool
    {
        return isset($this->deliveryAddress);
    }

    /**
     * Get a default "delivery address" value, if any is available
     *
     * @return string|null Default "delivery address" value or null if no default value is available
     */
    public function getDefaultDeliveryAddress() : ?string
    {
        return null;
    }
}