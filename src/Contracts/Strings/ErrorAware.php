<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Error Aware</h1>
 *
 * Component is aware of a string "error" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ErrorAware
{
    /**
     * Set error
     *
     * @param string|null $identifier Error name or identifier
     *
     * @return self
     */
    public function setError(?string $identifier);

    /**
     * Get error
     *
     * If no "error" value has been set, this method will
     * set and return a default "error" value,
     * if any such value is available
     *
     * @see getDefaultError()
     *
     * @return string|null error or null if no error has been set
     */
    public function getError() : ?string ;

    /**
     * Check if "error" has been set
     *
     * @return bool True if "error" has been set, false if not
     */
    public function hasError() : bool;

    /**
     * Get a default "error" value, if any is available
     *
     * @return string|null Default "error" value or null if no default value is available
     */
    public function getDefaultError() : ?string;
}