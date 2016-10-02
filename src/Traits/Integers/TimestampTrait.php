<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Timestamp Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\TimestampAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait TimestampTrait
{
    /**
     * Unix timestamp
     *
     * @var int|null
     */
    protected $timestamp = null;

    /**
     * Set timestamp
     *
     * @param int $timestamp Unix timestamp
     *
     * @return void
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = (int) $timestamp;
    }

    /**
     * Get timestamp
     *
     * If no "timestamp" value has been set, this method will
     * set and return a default "timestamp" value,
     * if any such value is available
     *
     * @see getDefaultTimestamp()
     *
     * @return int|null "timestamp" value or null if no "timestamp" value has been set
     */
    public function getTimestamp()
    {
        if (!$this->hasTimestamp() && $this->hasDefaultTimestamp()) {
            $this->setTimestamp($this->getDefaultTimestamp());
        }
        return $this->timestamp;
    }

    /**
     * Get a default "timestamp" value, if any is available
     *
     * @return int|null A default "timestamp" value or null if no default value is available
     */
    public function getDefaultTimestamp()
    {
        return null;
    }

    /**
     * Check if "timestamp" has been set
     *
     * @return bool True if "timestamp" value has been set, false if not
     */
    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    /**
     * Check if a default "timestamp" is available or not
     *
     * @return bool True of a default "timestamp" value is available, false if not
     */
    public function hasDefaultTimestamp()
    {
        $default = $this->getDefaultTimestamp();
        return isset($default);
    }
}