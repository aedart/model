<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DateTrait
{
    /**
     * Date of event
     *
     * @var string|null
     */
    protected $date = null;

    /**
     * Set date
     *
     * @param string|null $date Date of event
     *
     * @return self
     */
    public function setDate(?string $date)
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
     * @return string|null date or null if no date has been set
     */
    public function getDate() : ?string 
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
     * @return string|null Default "date" value or null if no default value is available
     */
    public function getDefaultDate() : ?string
    {
        return null;
    }
}