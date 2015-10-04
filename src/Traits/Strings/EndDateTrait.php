<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>End Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EndDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EndDateTrait {

    /**
     * End Date for some kind of an event
     *
     * @var string|null
     */
    protected $endDate = null;

    /**
     * Set the given end date
     *
     * @param string $date End Date for some kind of an event
     *
     * @return void
     */
    public function setEndDate($date) {
        $this->endDate = (string) $date;
    }

    /**
     * Get the given end date
     *
     * If no end date has been set, this method will
     * set and return a default end date, if any such
     * value is available
     *
     * @see getDefaultEndDate()
     *
     * @return string|null end date or null if none end date has been set
     */
    public function getEndDate() {
        if (!$this->hasEndDate() && $this->hasDefaultEndDate()) {
            $this->setEndDate($this->getDefaultEndDate());
        }
        return $this->endDate;
    }

    /**
     * Get a default end date value, if any is available
     *
     * @return string|null A default end date value or Null if no default value is available
     */
    public function getDefaultEndDate() {
        return null;
    }

    /**
     * Check if end date has been set
     *
     * @return bool True if end date has been set, false if not
     */
    public function hasEndDate() {
        if (!is_null($this->endDate)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default end date is available or not
     *
     * @return bool True of a default end date is available, false if not
     */
    public function hasDefaultEndDate() {
        if (!is_null($this->getDefaultEndDate())) {
            return true;
        }
        return false;
    }
}