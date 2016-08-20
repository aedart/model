<?php
namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Pattern Aware</h1>
 *
 * Component is able to set and retrieve some kind of search
 * or regex pattern, which can be used for matching one or
 * several elements. This could for instance be files, directories
 * or perhaps text.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PatternAware
{
    /**
     * Set the given pattern
     *
     * @param string $pattern A search or regex pattern
     *
     * @return void
     */
    public function setPattern($pattern);

    /**
     * Get the given pattern
     *
     * If no pattern has been set, this method will
     * set and return a default pattern, if any such
     * value is available
     *
     * @see getDefaultPattern()
     *
     * @return string|null pattern or null if none pattern has been set
     */
    public function getPattern();

    /**
     * Get a default pattern value, if any is available
     *
     * @return string|null A default pattern value or Null if no default value is available
     */
    public function getDefaultPattern();

    /**
     * Check if pattern has been set
     *
     * @return bool True if pattern has been set, false if not
     */
    public function hasPattern();

    /**
     * Check if a default pattern is available or not
     *
     * @return bool True of a default pattern is available, false if not
     */
    public function hasDefaultPattern();
}