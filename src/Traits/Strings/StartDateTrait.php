<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Start Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\StartDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait StartDateTrait {

    /**
     * Start Date of some kind of an event
     *
     * @var string|null
     */
    protected $startDate = null;

    /**
     * Set the given start date
     *
     * @param string $date Start Date of some kind of an event
     *
     * @return void
     */
    public function setStartDate($date) {
        $this->startDate = (string) $date;
    }

    /**
     * Get the given start date
     *
     * If no start date has been set, this method will
     * set and return a default start date, if any such
     * value is available
     *
     * @see getDefaultStartDate()
     *
     * @return string|null start date or null if none start date has been set
     */
    public function getStartDate() {
        if (!$this->hasStartDate() && $this->hasDefaultStartDate()) {
            $this->setStartDate($this->getDefaultStartDate());
        }
        return $this->startDate;
    }

    /**
     * Get a default start date value, if any is available
     *
     * @return string|null A default start date value or Null if no default value is available
     */
    public function getDefaultStartDate() {
        return null;
    }

    /**
     * Check if start date has been set
     *
     * @return bool True if start date has been set, false if not
     */
    public function hasStartDate() {
        if (!is_null($this->startDate)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default start date is available or not
     *
     * @return bool True of a default start date is available, false if not
     */
    public function hasDefaultStartDate() {
        if (!is_null($this->getDefaultStartDate())) {
            return true;
        }
        return false;
    }
}