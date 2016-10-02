<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a city, town or village
     *
     * @var string|null
     */
    protected $city = null;

    /**
     * Set city
     *
     * @param string $name Name of a city, town or village
     *
     * @return void
     */
    public function setCity($name)
    {
        $this->city = (string) $name;
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
     * @return string|null "city" value or null if no "city" value has been set
     */
    public function getCity()
    {
        if (!$this->hasCity() && $this->hasDefaultCity()) {
            $this->setCity($this->getDefaultCity());
        }
        return $this->city;
    }

    /**
     * Get a default "city" value, if any is available
     *
     * @return string|null A default "city" value or null if no default value is available
     */
    public function getDefaultCity()
    {
        return null;
    }

    /**
     * Check if "city" has been set
     *
     * @return bool True if "city" value has been set, false if not
     */
    public function hasCity()
    {
        return isset($this->city);
    }

    /**
     * Check if a default "city" is available or not
     *
     * @return bool True of a default "city" value is available, false if not
     */
    public function hasDefaultCity()
    {
        $default = $this->getDefaultCity();
        return isset($default);
    }
}