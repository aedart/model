<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Agent Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AgentAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AgentTrait
{
    /**
     * Someone or something that acts on behalf of someone else or something else
     *
     * @var string|null
     */
    protected $agent = null;

    /**
     * Set agent
     *
     * @param string $info Someone or something that acts on behalf of someone else or something else
     *
     * @return void
     */
    public function setAgent($info)
    {
        $this->agent = (string) $info;
    }

    /**
     * Get agent
     *
     * If no "agent" value has been set, this method will
     * set and return a default "agent" value,
     * if any such value is available
     *
     * @see getDefaultAgent()
     *
     * @return string|null "agent" value or null if no "agent" value has been set
     */
    public function getAgent()
    {
        if (!$this->hasAgent() && $this->hasDefaultAgent()) {
            $this->setAgent($this->getDefaultAgent());
        }
        return $this->agent;
    }

    /**
     * Get a default "agent" value, if any is available
     *
     * @return string|null A default "agent" value or null if no default value is available
     */
    public function getDefaultAgent()
    {
        return null;
    }

    /**
     * Check if "agent" has been set
     *
     * @return bool True if "agent" value has been set, false if not
     */
    public function hasAgent()
    {
        return isset($this->agent);
    }

    /**
     * Check if a default "agent" is available or not
     *
     * @return bool True of a default "agent" value is available, false if not
     */
    public function hasDefaultAgent()
    {
        $default = $this->getDefaultAgent();
        return isset($default);
    }
}