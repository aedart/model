<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Calendar Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CalendarAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CalendarTrait
{
    /**
     * Location to a calendar, e.g. URI, name, ID or other identifier
     *
     * @var string|null
     */
    protected $calendar = null;

    /**
     * Set calendar
     *
     * @param string $location Location to a calendar, e.g. URI, name, ID or other identifier
     *
     * @return void
     */
    public function setCalendar($location)
    {
        $this->calendar = (string) $location;
    }

    /**
     * Get calendar
     *
     * If no "calendar" value has been set, this method will
     * set and return a default "calendar" value,
     * if any such value is available
     *
     * @see getDefaultCalendar()
     *
     * @return string|null "calendar" value or null if no "calendar" value has been set
     */
    public function getCalendar()
    {
        if (!$this->hasCalendar() && $this->hasDefaultCalendar()) {
            $this->setCalendar($this->getDefaultCalendar());
        }
        return $this->calendar;
    }

    /**
     * Get a default "calendar" value, if any is available
     *
     * @return string|null A default "calendar" value or null if no default value is available
     */
    public function getDefaultCalendar()
    {
        return null;
    }

    /**
     * Check if "calendar" has been set
     *
     * @return bool True if "calendar" value has been set, false if not
     */
    public function hasCalendar()
    {
        return isset($this->calendar);
    }

    /**
     * Check if a default "calendar" is available or not
     *
     * @return bool True of a default "calendar" value is available, false if not
     */
    public function hasDefaultCalendar()
    {
        $default = $this->getDefaultCalendar();
        return isset($default);
    }
}