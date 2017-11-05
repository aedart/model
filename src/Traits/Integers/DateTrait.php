<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DateTrait
{
    /**
     * Date of event
     *
     * @var int|null
     */
    protected $date = null;

    /**
     * Set date
     *
     * @param int|null $date Date of event
     *
     * @return self
     */
    public function setDate(?int $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * If no "date" value has been set, this method will
     * set and return a default "date" value,
     * if any such value is available
     *
     * @see getDefaultDate()
     *
     * @return int|null date or null if no date has been set
     */
    public function getDate() : ?int 
    {
        if ( ! $this->hasDate()) {
            $this->setDate($this->getDefaultDate());
        }
        return $this->date;
    }

    /**
     * Check if "date" has been set
     *
     * @return bool True if "date" has been set, false if not
     */
    public function hasDate() : bool
    {
        return isset($this->date);
    }

    /**
     * Get a default "date" value, if any is available
     *
     * @return int|null Default "date" value or null if no default value is available
     */
    public function getDefaultDate() : ?int
    {
        return null;
    }
}