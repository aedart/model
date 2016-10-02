<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Address Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AddressAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AddressTrait
{
    /**
     * Address to something. Can be formatted.
     *
     * @var string|null
     */
    protected $address = null;

    /**
     * Set address
     *
     * @param string $address Address to something. Can be formatted.
     *
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = (string) $address;
    }

    /**
     * Get address
     *
     * If no "address" value has been set, this method will
     * set and return a default "address" value,
     * if any such value is available
     *
     * @see getDefaultAddress()
     *
     * @return string|null "address" value or null if no "address" value has been set
     */
    public function getAddress()
    {
        if (!$this->hasAddress() && $this->hasDefaultAddress()) {
            $this->setAddress($this->getDefaultAddress());
        }
        return $this->address;
    }

    /**
     * Get a default "address" value, if any is available
     *
     * @return string|null A default "address" value or null if no default value is available
     */
    public function getDefaultAddress()
    {
        return null;
    }

    /**
     * Check if "address" has been set
     *
     * @return bool True if "address" value has been set, false if not
     */
    public function hasAddress()
    {
        return isset($this->address);
    }

    /**
     * Check if a default "address" is available or not
     *
     * @return bool True of a default "address" value is available, false if not
     */
    public function hasDefaultAddress()
    {
        $default = $this->getDefaultAddress();
        return isset($default);
    }
}