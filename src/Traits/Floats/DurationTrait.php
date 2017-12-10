<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Duration Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\DurationAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait DurationTrait
{
    /**
     * Duration of some event or media
     *
     * @var float|null
     */
    protected $duration = null;

    /**
     * Set duration
     *
     * @param float|null $amount Duration of some event or media
     *
     * @return self
     */
    public function setDuration(?float $amount)
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
     * @return float|null duration or null if no duration has been set
     */
    public function getDuration() : ?float 
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
     * @return float|null Default "duration" value or null if no default value is available
     */
    public function getDefaultDuration() : ?float
    {
        return null;
    }
}