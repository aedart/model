<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Duration Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DurationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DurationTrait
{
    /**
     * Duration of some event or media
     *
     * @var int|null
     */
    protected $duration = null;

    /**
     * Set duration
     *
     * @param int|null $amount Duration of some event or media
     *
     * @return self
     */
    public function setDuration(?int $amount)
    {
        $this->duration = $amount;

        return $this;
    }

    /**
     * Get duration
     *
     * If no "duration" value has been set, this method will
     * set and return a default "duration" value,
     * if any such value is available
     *
     * @see getDefaultDuration()
     *
     * @return int|null duration or null if no duration has been set
     */
    public function getDuration() : ?int 
    {
        if ( ! $this->hasDuration()) {
            $this->setDuration($this->getDefaultDuration());
        }
        return $this->duration;
    }

    /**
     * Check if "duration" has been set
     *
     * @return bool True if "duration" has been set, false if not
     */
    public function hasDuration() : bool
    {
        return isset($this->duration);
    }

    /**
     * Get a default "duration" value, if any is available
     *
     * @return int|null Default "duration" value or null if no default value is available
     */
    public function getDefaultDuration() : ?int
    {
        return null;
    }
}