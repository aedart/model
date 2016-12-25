<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Start Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\StartDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait StartDateTrait
{
    /**
     * Start date (UNIX timestamp) of some kind of event
     *
     * @var int|null
     */
    protected $startDate = null;

    /**
     * Set start date
     *
     * @param int $date Start date (UNIX timestamp) of some kind of event
     *
     * @return void
     */
    public function setStartDate($date)
    {
        $this->startDate = (int) $date;
    }

    /**
     * Get start date
     *
     * If no "start date" value has been set, this method will
     * set and return a default "start date" value,
     * if any such value is available
     *
     * @see getDefaultStartDate()
     *
     * @return int|null "start date" value or null if no "start date" value has been set
     */
    public function getStartDate()
    {
        if (!$this->hasStartDate() && $this->hasDefaultStartDate()) {
            $this->setStartDate($this->getDefaultStartDate());
        }
        return $this->startDate;
    }

    /**
     * Get a default "start date" value, if any is available
     *
     * @return int|null A default "start date" value or null if no default value is available
     */
    public function getDefaultStartDate()
    {
        return null;
    }

    /**
     * Check if "start date" has been set
     *
     * @return bool True if "start date" value has been set, false if not
     */
    public function hasStartDate()
    {
        return isset($this->startDate);
    }

    /**
     * Check if a default "start date" is available or not
     *
     * @return bool True of a default "start date" value is available, false if not
     */
    public function hasDefaultStartDate()
    {
        $default = $this->getDefaultStartDate();
        return isset($default);
    }
}