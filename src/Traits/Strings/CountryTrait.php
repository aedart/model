<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Country Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CountryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CountryTrait
{
    /**
     * Name of country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @var string|null
     */
    protected $country = null;

    /**
     * Set country
     *
     * @param string|null $name Name of country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @return self
     */
    public function setCountry(?string $name)
    {
        $this->country = $name;

        return $this;
    }

    /**
     * Get country
     *
     * If no "country" value has been set, this method will
     * set and return a default "country" value,
     * if any such value is available
     *
     * @see getDefaultCountry()
     *
     * @return string|null country or null if no country has been set
     */
    public function getCountry() : ?string 
    {
        if ( ! $this->hasCountry()) {
            $this->setCountry($this->getDefaultCountry());
        }
        return $this->country;
    }

    /**
     * Check if "country" has been set
     *
     * @return bool True if "country" has been set, false if not
     */
    public function hasCountry() : bool
    {
        return isset($this->country);
    }

    /**
     * Get a default "country" value, if any is available
     *
     * @return string|null Default "country" value or null if no default value is available
     */
    public function getDefaultCountry() : ?string
    {
        return null;
    }
}