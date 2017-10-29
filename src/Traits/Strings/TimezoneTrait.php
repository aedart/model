<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of timezone
     *
     * @var string|null
     */
    protected $timezone = null;

    /**
     * Set timezone
     *
     * @param string|null $name Name of timezone
     *
     * @return self
     */
    public function setTimezone(?string $name)
    {
        $this->timezone = $name;

        return $this;
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
     * @return string|null timezone or null if no timezone has been set
     */
    public function getTimezone() : ?string 
    {
        if ( ! $this->hasTimezone()) {
            $this->setTimezone($this->getDefaultTimezone());
        }
        return $this->timezone;
    }

    /**
     * Check if "timezone" has been set
     *
     * @return bool True if "timezone" has been set, false if not
     */
    public function hasTimezone() : bool
    {
        return isset($this->timezone);
    }

    /**
     * Get a default "timezone" value, if any is available
     *
     * @return string|null Default "timezone" value or null if no default value is available
     */
    public function getDefaultTimezone() : ?string
    {
        return null;
    }
}