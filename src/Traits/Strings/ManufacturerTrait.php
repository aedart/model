<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Manufacturer Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ManufacturerAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ManufacturerTrait
{
    /**
     * Name or identifier of a manufacturer
     *
     * @var string|null
     */
    protected $manufacturer = null;

    /**
     * Set manufacturer
     *
     * @param string|null $identifier Name or identifier of a manufacturer
     *
     * @return self
     */
    public function setManufacturer(?string $identifier)
    {
        $this->manufacturer = $identifier;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * If no "manufacturer" value has been set, this method will
     * set and return a default "manufacturer" value,
     * if any such value is available
     *
     * @see getDefaultManufacturer()
     *
     * @return string|null manufacturer or null if no manufacturer has been set
     */
    public function getManufacturer() : ?string 
    {
        if ( ! $this->hasManufacturer()) {
            $this->setManufacturer($this->getDefaultManufacturer());
        }
        return $this->manufacturer;
    }

    /**
     * Check if "manufacturer" has been set
     *
     * @return bool True if "manufacturer" has been set, false if not
     */
    public function hasManufacturer() : bool
    {
        return isset($this->manufacturer);
    }

    /**
     * Get a default "manufacturer" value, if any is available
     *
     * @return string|null Default "manufacturer" value or null if no default value is available
     */
    public function getDefaultManufacturer() : ?string
    {
        return null;
    }
}