<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Timeout Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\TimeoutAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait TimeoutTrait
{
    /**
     * Timeout
     *
     * @var int|null
     */
    protected $timeout = null;

    /**
     * Set timeout
     *
     * @param int $value Timeout
     *
     * @return void
     */
    public function setTimeout($value)
    {
        $this->timeout = (int) $value;
    }

    /**
     * Get timeout
     *
     * If no "timeout" value has been set, this method will
     * set and return a default "timeout" value,
     * if any such value is available
     *
     * @see getDefaultTimeout()
     *
     * @return int|null "timeout" value or null if no "timeout" value has been set
     */
    public function getTimeout()
    {
        if (!$this->hasTimeout() && $this->hasDefaultTimeout()) {
            $this->setTimeout($this->getDefaultTimeout());
        }
        return $this->timeout;
    }

    /**
     * Get a default "timeout" value, if any is available
     *
     * @return int|null A default "timeout" value or null if no default value is available
     */
    public function getDefaultTimeout()
    {
        return null;
    }

    /**
     * Check if "timeout" has been set
     *
     * @return bool True if "timeout" value has been set, false if not
     */
    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    /**
     * Check if a default "timeout" is available or not
     *
     * @return bool True of a default "timeout" value is available, false if not
     */
    public function hasDefaultTimeout()
    {
        $default = $this->getDefaultTimeout();
        return isset($default);
    }
}