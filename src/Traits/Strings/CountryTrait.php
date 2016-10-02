<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @var string|null
     */
    protected $country = null;

    /**
     * Set country
     *
     * @param string $name Name of a country, e.g. Denmark, United Kingdom, Australia...etc
     *
     * @return void
     */
    public function setCountry($name)
    {
        $this->country = (string) $name;
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
     * @return string|null "country" value or null if no "country" value has been set
     */
    public function getCountry()
    {
        if (!$this->hasCountry() && $this->hasDefaultCountry()) {
            $this->setCountry($this->getDefaultCountry());
        }
        return $this->country;
    }

    /**
     * Get a default "country" value, if any is available
     *
     * @return string|null A default "country" value or null if no default value is available
     */
    public function getDefaultCountry()
    {
        return null;
    }

    /**
     * Check if "country" has been set
     *
     * @return bool True if "country" value has been set, false if not
     */
    public function hasCountry()
    {
        return isset($this->country);
    }

    /**
     * Check if a default "country" is available or not
     *
     * @return bool True of a default "country" value is available, false if not
     */
    public function hasDefaultCountry()
    {
        $default = $this->getDefaultCountry();
        return isset($default);
    }
}