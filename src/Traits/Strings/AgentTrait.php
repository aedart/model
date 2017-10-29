<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $agent Someone or something that acts on behalf of someone else or something else
     *
     * @return self
     */
    public function setAgent(?string $agent)
    {
        $this->agent = $agent;

        return $this;
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
     * @return string|null agent or null if no agent has been set
     */
    public function getAgent() : ?string 
    {
        if ( ! $this->hasAgent()) {
            $this->setAgent($this->getDefaultAgent());
        }
        return $this->agent;
    }

    /**
     * Check if "agent" has been set
     *
     * @return bool True if "agent" has been set, false if not
     */
    public function hasAgent() : bool
    {
        return isset($this->agent);
    }

    /**
     * Get a default "agent" value, if any is available
     *
     * @return string|null Default "agent" value or null if no default value is available
     */
    public function getDefaultAgent() : ?string
    {
        return null;
    }
}