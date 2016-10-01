<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Pattern Aware</h1>
 *
 * Component is aware of a string "pattern" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PatternAware
{
    /**
     * Set pattern
     *
     * @param string $pattern A search or regex pattern
     *
     * @return void
     */
    public function setPattern($pattern);

    /**
     * Get pattern
     *
     * If no "pattern" value has been set, this method will
     * set and return a default "pattern" value,
     * if any such value is available
     *
     * @see getDefaultPattern()
     *
     * @return string|null "pattern" value or null if no "pattern" value has been set
     */
    public function getPattern();

    /**
     * Get a default "pattern" value, if any is available
     *
     * @return string|null A default "pattern" value or null if no default value is available
     */
    public function getDefaultPattern();

    /**
     * Check if "pattern" has been set
     *
     * @return bool True if "pattern" value has been set, false if not
     */
    public function hasPattern();

    /**
     * Check if a default "pattern" is available or not
     *
     * @return bool True of a default "pattern" value is available, false if not
     */
    public function hasDefaultPattern();
}