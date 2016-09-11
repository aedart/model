<?php
namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Script Aware</h1>
 *
 * Component is aware of some kind of script, which can also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ScriptAware
{
    /**
     * Set the given script
     *
     * @param string $script Script
     *
     * @return void
     */
    public function setScript($script);

    /**
     * Get the given script
     *
     * If no script has been set, this method will
     * set and return a default script, if any such
     * value is available
     *
     * @see getDefaultScript()
     *
     * @return string|null script or null if none script has been set
     */
    public function getScript();

    /**
     * Get a default script value, if any is available
     *
     * @return string|null A default script value or Null if no default value is available
     */
    public function getDefaultScript();

    /**
     * Check if script has been set
     *
     * @return bool True if script has been set, false if not
     */
    public function hasScript();

    /**
     * Check if a default script is available or not
     *
     * @return bool True of a default script is available, false if not
     */
    public function hasDefaultScript();
}