<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $pattern Some kind of a pattern, e.g. search or regex
     *
     * @return self
     */
    public function setPattern(?string $pattern);

    /**
     * Get pattern
     *
     * If no "pattern" value has been set, this method will
     * set and return a default "pattern" value,
     * if any such value is available
     *
     * @see getDefaultPattern()
     *
     * @return string|null pattern or null if no pattern has been set
     */
    public function getPattern() : ?string ;

    /**
     * Check if "pattern" has been set
     *
     * @return bool True if "pattern" has been set, false if not
     */
    public function hasPattern() : bool;

    /**
     * Get a default "pattern" value, if any is available
     *
     * @return string|null Default "pattern" value or null if no default value is available
     */
    public function getDefaultPattern() : ?string;
}