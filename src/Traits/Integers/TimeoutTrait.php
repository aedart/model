<?php
namespace Aedart\Model\Traits\Integers;

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
     * Set the given timeout
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
     * Get the given timeout
     *
     * If no timeout has been set, this method will
     * set and return a default timeout, if any such
     * value is available
     *
     * @see getDefaultTimeout()
     *
     * @return int|null timeout or null if none timeout has been set
     */
    public function getTimeout()
    {
        if (!$this->hasTimeout() && $this->hasDefaultTimeout()) {
            $this->setTimeout($this->getDefaultTimeout());
        }
        return $this->timeout;
    }

    /**
     * Get a default timeout value, if any is available
     *
     * @return int|null A default timeout value or Null if no default value is available
     */
    public function getDefaultTimeout()
    {
        return null;
    }

    /**
     * Check if timeout has been set
     *
     * @return bool True if timeout has been set, false if not
     */
    public function hasTimeout()
    {
        return !is_null($this->timeout);
    }

    /**
     * Check if a default timeout is available or not
     *
     * @return bool True of a default timeout is available, false if not
     */
    public function hasDefaultTimeout()
    {
        return !is_null($this->getDefaultTimeout());
    }
}