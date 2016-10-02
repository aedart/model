<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Timezone Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TimezoneAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TimezoneTrait
{
    /**
     * Name of the timezone
     *
     * @var string|null
     */
    protected $timezone = null;

    /**
     * Set timezone
     *
     * @param string $name Name of the timezone
     *
     * @return void
     */
    public function setTimezone($name)
    {
        $this->timezone = (string) $name;
    }

    /**
     * Get timezone
     *
     * If no "timezone" value has been set, this method will
     * set and return a default "timezone" value,
     * if any such value is available
     *
     * @see getDefaultTimezone()
     *
     * @return string|null "timezone" value or null if no "timezone" value has been set
     */
    public function getTimezone()
    {
        if (!$this->hasTimezone() && $this->hasDefaultTimezone()) {
            $this->setTimezone($this->getDefaultTimezone());
        }
        return $this->timezone;
    }

    /**
     * Get a default "timezone" value, if any is available
     *
     * @return string|null A default "timezone" value or null if no default value is available
     */
    public function getDefaultTimezone()
    {
        return null;
    }

    /**
     * Check if "timezone" has been set
     *
     * @return bool True if "timezone" value has been set, false if not
     */
    public function hasTimezone()
    {
        return isset($this->timezone);
    }

    /**
     * Check if a default "timezone" is available or not
     *
     * @return bool True of a default "timezone" value is available, false if not
     */
    public function hasDefaultTimezone()
    {
        $default = $this->getDefaultTimezone();
        return isset($default);
    }
}