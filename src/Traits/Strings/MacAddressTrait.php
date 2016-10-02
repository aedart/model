<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $address Media Access Control Address (MAC Address)
     *
     * @return void
     */
    public function setMacAddress($address)
    {
        $this->macAddress = (string) $address;
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
     * @return string|null "mac address" value or null if no "mac address" value has been set
     */
    public function getMacAddress()
    {
        if (!$this->hasMacAddress() && $this->hasDefaultMacAddress()) {
            $this->setMacAddress($this->getDefaultMacAddress());
        }
        return $this->macAddress;
    }

    /**
     * Get a default "mac address" value, if any is available
     *
     * @return string|null A default "mac address" value or null if no default value is available
     */
    public function getDefaultMacAddress()
    {
        return null;
    }

    /**
     * Check if "mac address" has been set
     *
     * @return bool True if "mac address" value has been set, false if not
     */
    public function hasMacAddress()
    {
        return isset($this->macAddress);
    }

    /**
     * Check if a default "mac address" is available or not
     *
     * @return bool True of a default "mac address" value is available, false if not
     */
    public function hasDefaultMacAddress()
    {
        $default = $this->getDefaultMacAddress();
        return isset($default);
    }
}