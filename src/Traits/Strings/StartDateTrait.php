<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Start Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\StartDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait StartDateTrait
{
    /**
     * Start date of event
     *
     * @var string|null
     */
    protected $startDate = null;

    /**
     * Set start date
     *
     * @param string|null $date Start date of event
     *
     * @return self
     */
    public function setStartDate(?string $date)
    {
        $this->startDate = $date;

        return $this;
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
     * @return string|null start date or null if no start date has been set
     */
    public function getStartDate() : ?string 
    {
        if ( ! $this->hasStartDate()) {
            $this->setStartDate($this->getDefaultStartDate());
        }
        return $this->startDate;
    }

    /**
     * Check if "start date" has been set
     *
     * @return bool True if "start date" has been set, false if not
     */
    public function hasStartDate() : bool
    {
        return isset($this->startDate);
    }

    /**
     * Get a default "start date" value, if any is available
     *
     * @return string|null Default "start date" value or null if no default value is available
     */
    public function getDefaultStartDate() : ?string
    {
        return null;
    }
}