<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Output Path Aware</h1>
 *
 * Component is able to set and get a path of where some kind of
 * output must be located or perhaps written to. This could be a
 * directory or file path.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface OutputPathAware {

    /**
     * Set the given output path
     *
     * @param string $path Output path - The location of where some kind of output must placed or written to
     *
     * @return void
     */
    public function setOutputPath($path);

    /**
     * Get the given output path
     *
     * If no output path has been set, this method will
     * set and return a default output path, if any such
     * value is available
     *
     * @see getDefaultOutputPath()
     *
     * @return string|null output path or null if none output path has been set
     */
    public function getOutputPath();

    /**
     * Get a default output path value, if any is available
     *
     * @return string|null A default output path value or Null if no default value is available
     */
    public function getDefaultOutputPath();

    /**
     * Check if output path has been set
     *
     * @return bool True if output path has been set, false if not
     */
    public function hasOutputPath();

    /**
     * Check if a default output path is available or not
     *
     * @return bool True of a default output path is available, false if not
     */
    public function hasDefaultOutputPath();
}