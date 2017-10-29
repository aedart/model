<?php
declare(strict_types=1);

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
     * Timeout amount
     *
     * @var int|null
     */
    protected $timeout = null;

    /**
     * Set timeout
     *
     * @param int|null $amount Timeout amount
     *
     * @return self
     */
    public function setTimeout(?int $amount)
    {
        $this->timeout = $amount;

        return $this;
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
     * @return int|null timeout or null if no timeout has been set
     */
    public function getTimeout() : ?int 
    {
        if ( ! $this->hasTimeout()) {
            $this->setTimeout($this->getDefaultTimeout());
        }
        return $this->timeout;
    }

    /**
     * Check if "timeout" has been set
     *
     * @return bool True if "timeout" has been set, false if not
     */
    public function hasTimeout() : bool
    {
        return isset($this->timeout);
    }

    /**
     * Get a default "timeout" value, if any is available
     *
     * @return int|null Default "timeout" value or null if no default value is available
     */
    public function getDefaultTimeout() : ?int
    {
        return null;
    }
}