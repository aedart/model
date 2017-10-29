<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Agent Aware</h1>
 *
 * Component is aware of a string "agent" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AgentAware
{
    /**
     * Set agent
     *
     * @param string|null $agent Someone or something that acts on behalf of someone else or something else
     *
     * @return self
     */
    public function setAgent(?string $agent);

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
    public function getAgent() : ?string ;

    /**
     * Check if "agent" has been set
     *
     * @return bool True if "agent" has been set, false if not
     */
    public function hasAgent() : bool;

    /**
     * Get a default "agent" value, if any is available
     *
     * @return string|null Default "agent" value or null if no default value is available
     */
    public function getDefaultAgent() : ?string;
}