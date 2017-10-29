<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Begin Aware</h1>
 *
 * Component is aware of a string "begin" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface BeginAware
{
    /**
     * Set begin
     *
     * @param string|null $location Location, index or some other identifier of where something begins
     *
     * @return self
     */
    public function setBegin(?string $location);

    /**
     * Get begin
     *
     * If no "begin" value has been set, this method will
     * set and return a default "begin" value,
     * if any such value is available
     *
     * @see getDefaultBegin()
     *
     * @return string|null begin or null if no begin has been set
     */
    public function getBegin() : ?string ;

    /**
     * Check if "begin" has been set
     *
     * @return bool True if "begin" has been set, false if not
     */
    public function hasBegin() : bool;

    /**
     * Get a default "begin" value, if any is available
     *
     * @return string|null Default "begin" value or null if no default value is available
     */
    public function getDefaultBegin() : ?string;
}