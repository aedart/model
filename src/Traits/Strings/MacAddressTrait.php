<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Mac Address Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\MacAddressAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait MacAddressTrait
{
    /**
     * Media Access Control Address (MAC Address)
     *
     * @var string|null
     */
    protected $macAddress = null;

    /**
     * Set mac address
     *
     * @param string|null $address Media Access Control Address (MAC Address)
     *
     * @return self
     */
    public function setMacAddress(?string $address)
    {
        $this->macAddress = $address;

        return $this;
    }

    /**
     * Get mac address
     *
     * If no "mac address" value has been set, this method will
     * set and return a default "mac address" value,
     * if any such value is available
     *
     * @see getDefaultMacAddress()
     *
     * @return string|null mac address or null if no mac address has been set
     */
    public function getMacAddress() : ?string 
    {
        if ( ! $this->hasMacAddress()) {
            $this->setMacAddress($this->getDefaultMacAddress());
        }
        return $this->macAddress;
    }

    /**
     * Check if "mac address" has been set
     *
     * @return bool True if "mac address" has been set, false if not
     */
    public function hasMacAddress() : bool
    {
        return isset($this->macAddress);
    }

    /**
     * Get a default "mac address" value, if any is available
     *
     * @return string|null Default "mac address" value or null if no default value is available
     */
    public function getDefaultMacAddress() : ?string
    {
        return null;
    }
}