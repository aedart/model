<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>State Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\StateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait StateTrait
{
    /**
     * The state of this component or what it represents
     *
     * @var string|null
     */
    protected $state = null;

    /**
     * Set state
     *
     * @param string $state The state of this component or what it represents
     *
     * @return void
     */
    public function setState($state)
    {
        $this->state = (string) $state;
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
     * @return string|null "state" value or null if no "state" value has been set
     */
    public function getState()
    {
        if (!$this->hasState() && $this->hasDefaultState()) {
            $this->setState($this->getDefaultState());
        }
        return $this->state;
    }

    /**
     * Get a default "state" value, if any is available
     *
     * @return string|null A default "state" value or null if no default value is available
     */
    public function getDefaultState()
    {
        return null;
    }

    /**
     * Check if "state" has been set
     *
     * @return bool True if "state" value has been set, false if not
     */
    public function hasState()
    {
        return isset($this->state);
    }

    /**
     * Check if a default "state" is available or not
     *
     * @return bool True of a default "state" value is available, false if not
     */
    public function hasDefaultState()
    {
        $default = $this->getDefaultState();
        return isset($default);
    }
}