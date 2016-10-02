<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Latitude Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LatitudeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LatitudeTrait
{
    /**
     * North-South position on Earth&#039;s surface
     *
     * @var string|null
     */
    protected $latitude = null;

    /**
     * Set latitude
     *
     * @param string $value North-South position on Earth's surface
     *
     * @return void
     */
    public function setLatitude($value)
    {
        $this->latitude = (string) $value;
    }

    /**
     * Get latitude
     *
     * If no "latitude" value has been set, this method will
     * set and return a default "latitude" value,
     * if any such value is available
     *
     * @see getDefaultLatitude()
     *
     * @return string|null "latitude" value or null if no "latitude" value has been set
     */
    public function getLatitude()
    {
        if (!$this->hasLatitude() && $this->hasDefaultLatitude()) {
            $this->setLatitude($this->getDefaultLatitude());
        }
        return $this->latitude;
    }

    /**
     * Get a default "latitude" value, if any is available
     *
     * @return string|null A default "latitude" value or null if no default value is available
     */
    public function getDefaultLatitude()
    {
        return null;
    }

    /**
     * Check if "latitude" has been set
     *
     * @return bool True if "latitude" value has been set, false if not
     */
    public function hasLatitude()
    {
        return isset($this->latitude);
    }

    /**
     * Check if a default "latitude" is available or not
     *
     * @return bool True of a default "latitude" value is available, false if not
     */
    public function hasDefaultLatitude()
    {
        $default = $this->getDefaultLatitude();
        return isset($default);
    }
}