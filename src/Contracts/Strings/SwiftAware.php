<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Swift Aware</h1>
 *
 * Component is aware of a string "swift" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SwiftAware
{
    /**
     * Set swift
     *
     * @param string $code ISO-9362 Swift Code
     *
     * @return void
     */
    public function setSwift($code);

    /**
     * Get swift
     *
     * If no "swift" value has been set, this method will
     * set and return a default "swift" value,
     * if any such value is available
     *
     * @see getDefaultSwift()
     *
     * @return string|null "swift" value or null if no "swift" value has been set
     */
    public function getSwift();

    /**
     * Get a default "swift" value, if any is available
     *
     * @return string|null A default "swift" value or null if no default value is available
     */
    public function getDefaultSwift();

    /**
     * Check if "swift" has been set
     *
     * @return bool True if "swift" value has been set, false if not
     */
    public function hasSwift();

    /**
     * Check if a default "swift" is available or not
     *
     * @return bool True of a default "swift" value is available, false if not
     */
    public function hasDefaultSwift();
}