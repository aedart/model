<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $code ISO-9362 Swift Code
     *
     * @return self
     */
    public function setSwift(?string $code);

    /**
     * Get swift
     *
     * If no "swift" value has been set, this method will
     * set and return a default "swift" value,
     * if any such value is available
     *
     * @see getDefaultSwift()
     *
     * @return string|null swift or null if no swift has been set
     */
    public function getSwift() : ?string ;

    /**
     * Check if "swift" has been set
     *
     * @return bool True if "swift" has been set, false if not
     */
    public function hasSwift() : bool;

    /**
     * Get a default "swift" value, if any is available
     *
     * @return string|null Default "swift" value or null if no default value is available
     */
    public function getDefaultSwift() : ?string;
}