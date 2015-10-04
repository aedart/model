<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DateTrait {

    /**
     * Date
     *
     * @var string|null
     */
    protected $date = null;

    /**
     * Set the given date
     *
     * @param string $date Date
     *
     * @return void
     */
    public function setDate($date) {
        $this->date = (string) $date;
    }

    /**
     * Get the given date
     *
     * If no date has been set, this method will
     * set and return a default date, if any such
     * value is available
     *
     * @see getDefaultDate()
     *
     * @return string|null date or null if none date has been set
     */
    public function getDate() {
        if (!$this->hasDate() && $this->hasDefaultDate()) {
            $this->setDate($this->getDefaultDate());
        }
        return $this->date;
    }

    /**
     * Get a default date value, if any is available
     *
     * @return string|null A default date value or Null if no default value is available
     */
    public function getDefaultDate() {
        return null;
    }

    /**
     * Check if date has been set
     *
     * @return bool True if date has been set, false if not
     */
    public function hasDate() {
        if (!is_null($this->date)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default date is available or not
     *
     * @return bool True of a default date is available, false if not
     */
    public function hasDefaultDate() {
        if (!is_null($this->getDefaultDate())) {
            return true;
        }
        return false;
    }
}