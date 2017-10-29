<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $path Location of where some kind of output must be placed or written to
     *
     * @return self
     */
    public function setOutputPath(?string $path);

    /**
     * Get output path
     *
     * If no "output path" value has been set, this method will
     * set and return a default "output path" value,
     * if any such value is available
     *
     * @see getDefaultOutputPath()
     *
     * @return string|null output path or null if no output path has been set
     */
    public function getOutputPath() : ?string ;

    /**
     * Check if "output path" has been set
     *
     * @return bool True if "output path" has been set, false if not
     */
    public function hasOutputPath() : bool;

    /**
     * Get a default "output path" value, if any is available
     *
     * @return string|null Default "output path" value or null if no default value is available
     */
    public function getDefaultOutputPath() : ?string;
}