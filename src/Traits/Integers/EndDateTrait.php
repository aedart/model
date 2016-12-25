<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>End Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\EndDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait EndDateTrait
{
    /**
     * Date (UNIX timestamp) for when some kind of event ends
     *
     * @var int|null
     */
    protected $endDate = null;

    /**
     * Set end date
     *
     * @param int $date Date (UNIX timestamp) for when some kind of event ends
     *
     * @return void
     */
    public function setEndDate($date)
    {
        $this->endDate = (int) $date;
    }

    /**
     * Get end date
     *
     * If no "end date" value has been set, this method will
     * set and return a default "end date" value,
     * if any such value is available
     *
     * @see getDefaultEndDate()
     *
     * @return int|null "end date" value or null if no "end date" value has been set
     */
    public function getEndDate()
    {
        if (!$this->hasEndDate() && $this->hasDefaultEndDate()) {
            $this->setEndDate($this->getDefaultEndDate());
        }
        return $this->endDate;
    }

    /**
     * Get a default "end date" value, if any is available
     *
     * @return int|null A default "end date" value or null if no default value is available
     */
    public function getDefaultEndDate()
    {
        return null;
    }

    /**
     * Check if "end date" has been set
     *
     * @return bool True if "end date" value has been set, false if not
     */
    public function hasEndDate()
    {
        return isset($this->endDate);
    }

    /**
     * Check if a default "end date" is available or not
     *
     * @return bool True of a default "end date" value is available, false if not
     */
    public function hasDefaultEndDate()
    {
        $default = $this->getDefaultEndDate();
        return isset($default);
    }
}