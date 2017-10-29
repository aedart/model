<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Script Aware</h1>
 *
 * Component is aware of a string "script" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ScriptAware
{
    /**
     * Set script
     *
     * @param string|null $script Script of some kind or path to some script
     *
     * @return self
     */
    public function setScript(?string $script);

    /**
     * Get script
     *
     * If no "script" value has been set, this method will
     * set and return a default "script" value,
     * if any such value is available
     *
     * @see getDefaultScript()
     *
     * @return string|null script or null if no script has been set
     */
    public function getScript() : ?string ;

    /**
     * Check if "script" has been set
     *
     * @return bool True if "script" has been set, false if not
     */
    public function hasScript() : bool;

    /**
     * Get a default "script" value, if any is available
     *
     * @return string|null Default "script" value or null if no default value is available
     */
    public function getDefaultScript() : ?string;
}