<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Longitude Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LongitudeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LongitudeTrait
{
    /**
     * East-West position on Earth&#039;s surface
     *
     * @var string|null
     */
    protected $longitude = null;

    /**
     * Set longitude
     *
     * @param string|null $value East-West position on Earth&#039;s surface
     *
     * @return self
     */
    public function setLongitude(?string $value)
    {
        $this->longitude = $value;

        return $this;
    }

    /**
     * Get longitude
     *
     * If no "longitude" value has been set, this method will
     * set and return a default "longitude" value,
     * if any such value is available
     *
     * @see getDefaultLongitude()
     *
     * @return string|null longitude or null if no longitude has been set
     */
    public function getLongitude() : ?string 
    {
        if ( ! $this->hasLongitude()) {
            $this->setLongitude($this->getDefaultLongitude());
        }
        return $this->longitude;
    }

    /**
     * Check if "longitude" has been set
     *
     * @return bool True if "longitude" has been set, false if not
     */
    public function hasLongitude() : bool
    {
        return isset($this->longitude);
    }

    /**
     * Get a default "longitude" value, if any is available
     *
     * @return string|null Default "longitude" value or null if no default value is available
     */
    public function getDefaultLongitude() : ?string
    {
        return null;
    }
}