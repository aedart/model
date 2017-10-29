<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>City Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CityAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CityTrait
{
    /**
     * Name of city, town or village
     *
     * @var string|null
     */
    protected $city = null;

    /**
     * Set city
     *
     * @param string|null $name Name of city, town or village
     *
     * @return self
     */
    public function setCity(?string $name)
    {
        $this->city = $name;

        return $this;
    }

    /**
     * Get city
     *
     * If no "city" value has been set, this method will
     * set and return a default "city" value,
     * if any such value is available
     *
     * @see getDefaultCity()
     *
     * @return string|null city or null if no city has been set
     */
    public function getCity() : ?string 
    {
        if ( ! $this->hasCity()) {
            $this->setCity($this->getDefaultCity());
        }
        return $this->city;
    }

    /**
     * Check if "city" has been set
     *
     * @return bool True if "city" has been set, false if not
     */
    public function hasCity() : bool
    {
        return isset($this->city);
    }

    /**
     * Get a default "city" value, if any is available
     *
     * @return string|null Default "city" value or null if no default value is available
     */
    public function getDefaultCity() : ?string
    {
        return null;
    }
}