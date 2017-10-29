<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>State Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\StateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait StateTrait
{
    /**
     * State of this component or what it represents
     *
     * @var int|null
     */
    protected $state = null;

    /**
     * Set state
     *
     * @param int|null $state State of this component or what it represents
     *
     * @return self
     */
    public function setState(?int $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * If no "state" value has been set, this method will
     * set and return a default "state" value,
     * if any such value is available
     *
     * @see getDefaultState()
     *
     * @return int|null state or null if no state has been set
     */
    public function getState() : ?int 
    {
        if ( ! $this->hasState()) {
            $this->setState($this->getDefaultState());
        }
        return $this->state;
    }

    /**
     * Check if "state" has been set
     *
     * @return bool True if "state" has been set, false if not
     */
    public function hasState() : bool
    {
        return isset($this->state);
    }

    /**
     * Get a default "state" value, if any is available
     *
     * @return int|null Default "state" value or null if no default value is available
     */
    public function getDefaultState() : ?int
    {
        return null;
    }
}