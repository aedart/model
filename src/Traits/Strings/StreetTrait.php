<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Full street address, which might include building or apartment number(s)
     *
     * @var string|null
     */
    protected $street = null;

    /**
     * Set street
     *
     * @param string|null $address Full street address, which might include building or apartment number(s)
     *
     * @return self
     */
    public function setStreet(?string $address)
    {
        $this->street = $address;

        return $this;
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
     * @return string|null street or null if no street has been set
     */
    public function getStreet() : ?string 
    {
        if ( ! $this->hasStreet()) {
            $this->setStreet($this->getDefaultStreet());
        }
        return $this->street;
    }

    /**
     * Check if "street" has been set
     *
     * @return bool True if "street" has been set, false if not
     */
    public function hasStreet() : bool
    {
        return isset($this->street);
    }

    /**
     * Get a default "street" value, if any is available
     *
     * @return string|null Default "street" value or null if no default value is available
     */
    public function getDefaultStreet() : ?string
    {
        return null;
    }
}