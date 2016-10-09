<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Zone Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ZoneAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ZoneTrait
{
    /**
     * Name of an area, district or devision
     *
     * @var string|null
     */
    protected $zone = null;

    /**
     * Set zone
     *
     * @param string $name Name of an area, district or devision
     *
     * @return void
     */
    public function setZone($name)
    {
        $this->zone = (string) $name;
    }

    /**
     * Get zone
     *
     * If no "zone" value has been set, this method will
     * set and return a default "zone" value,
     * if any such value is available
     *
     * @see getDefaultZone()
     *
     * @return string|null "zone" value or null if no "zone" value has been set
     */
    public function getZone()
    {
        if (!$this->hasZone() && $this->hasDefaultZone()) {
            $this->setZone($this->getDefaultZone());
        }
        return $this->zone;
    }

    /**
     * Get a default "zone" value, if any is available
     *
     * @return string|null A default "zone" value or null if no default value is available
     */
    public function getDefaultZone()
    {
        return null;
    }

    /**
     * Check if "zone" has been set
     *
     * @return bool True if "zone" value has been set, false if not
     */
    public function hasZone()
    {
        return isset($this->zone);
    }

    /**
     * Check if a default "zone" is available or not
     *
     * @return bool True of a default "zone" value is available, false if not
     */
    public function hasDefaultZone()
    {
        $default = $this->getDefaultZone();
        return isset($default);
    }
}