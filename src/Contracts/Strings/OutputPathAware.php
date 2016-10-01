<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Output Path Aware</h1>
 *
 * Component is aware of a string "output path" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface OutputPathAware
{
    /**
     * Set output path
     *
     * @param string $path Location of where some kind of output must be placed or written to
     *
     * @return void
     */
    public function setOutputPath($path);

    /**
     * Get output path
     *
     * If no "output path" value has been set, this method will
     * set and return a default "output path" value,
     * if any such value is available
     *
     * @see getDefaultOutputPath()
     *
     * @return string|null "output path" value or null if no "output path" value has been set
     */
    public function getOutputPath();

    /**
     * Get a default "output path" value, if any is available
     *
     * @return string|null A default "output path" value or null if no default value is available
     */
    public function getDefaultOutputPath();

    /**
     * Check if "output path" has been set
     *
     * @return bool True if "output path" value has been set, false if not
     */
    public function hasOutputPath();

    /**
     * Check if a default "output path" is available or not
     *
     * @return bool True of a default "output path" value is available, false if not
     */
    public function hasDefaultOutputPath();
}