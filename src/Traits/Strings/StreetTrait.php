<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Street Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\StreetAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait StreetTrait
{
    /**
     * Full street address, which might include building or appartment number(s)
     *
     * @var string|null
     */
    protected $street = null;

    /**
     * Set street
     *
     * @param string $address Full street address, which might include building or appartment number(s)
     *
     * @return void
     */
    public function setStreet($address)
    {
        $this->street = (string) $address;
    }

    /**
     * Get street
     *
     * If no "street" value has been set, this method will
     * set and return a default "street" value,
     * if any such value is available
     *
     * @see getDefaultStreet()
     *
     * @return string|null "street" value or null if no "street" value has been set
     */
    public function getStreet()
    {
        if (!$this->hasStreet() && $this->hasDefaultStreet()) {
            $this->setStreet($this->getDefaultStreet());
        }
        return $this->street;
    }

    /**
     * Get a default "street" value, if any is available
     *
     * @return string|null A default "street" value or null if no default value is available
     */
    public function getDefaultStreet()
    {
        return null;
    }

    /**
     * Check if "street" has been set
     *
     * @return bool True if "street" value has been set, false if not
     */
    public function hasStreet()
    {
        return isset($this->street);
    }

    /**
     * Check if a default "street" is available or not
     *
     * @return bool True of a default "street" value is available, false if not
     */
    public function hasDefaultStreet()
    {
        $default = $this->getDefaultStreet();
        return isset($default);
    }
}