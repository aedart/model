<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $script Script of some kind
     *
     * @return void
     */
    public function setScript($script);

    /**
     * Get script
     *
     * If no "script" value has been set, this method will
     * set and return a default "script" value,
     * if any such value is available
     *
     * @see getDefaultScript()
     *
     * @return string|null "script" value or null if no "script" value has been set
     */
    public function getScript();

    /**
     * Get a default "script" value, if any is available
     *
     * @return string|null A default "script" value or null if no default value is available
     */
    public function getDefaultScript();

    /**
     * Check if "script" has been set
     *
     * @return bool True if "script" value has been set, false if not
     */
    public function hasScript();

    /**
     * Check if a default "script" is available or not
     *
     * @return bool True of a default "script" value is available, false if not
     */
    public function hasDefaultScript();
}