<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * Date for when some kind of event ends
     *
     * @var int|null
     */
    protected $endDate = null;

    /**
     * Set end date
     *
     * @param int|null $date Date for when some kind of event ends
     *
     * @return self
     */
    public function setEndDate(?int $date)
    {
        $this->endDate = $date;

        return $this;
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
     * @return int|null end date or null if no end date has been set
     */
    public function getEndDate() : ?int 
    {
        if ( ! $this->hasEndDate()) {
            $this->setEndDate($this->getDefaultEndDate());
        }
        return $this->endDate;
    }

    /**
     * Check if "end date" has been set
     *
     * @return bool True if "end date" has been set, false if not
     */
    public function hasEndDate() : bool
    {
        return isset($this->endDate);
    }

    /**
     * Get a default "end date" value, if any is available
     *
     * @return int|null Default "end date" value or null if no default value is available
     */
    public function getDefaultEndDate() : ?int
    {
        return null;
    }
}