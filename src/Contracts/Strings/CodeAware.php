<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Code Aware</h1>
 *
 * Component is aware of a string "code" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CodeAware
{
    /**
     * Set code
     *
     * @param string|null $code The code for something, e.g. language code, classification code, or perhaps an artifacts identifier
     *
     * @return self
     */
    public function setCode(?string $code);

    /**
     * Get code
     *
     * If no "code" value has been set, this method will
     * set and return a default "code" value,
     * if any such value is available
     *
     * @see getDefaultCode()
     *
     * @return string|null code or null if no code has been set
     */
    public function getCode() : ?string ;

    /**
     * Check if "code" has been set
     *
     * @return bool True if "code" has been set, false if not
     */
    public function hasCode() : bool;

    /**
     * Get a default "code" value, if any is available
     *
     * @return string|null Default "code" value or null if no default value is available
     */
    public function getDefaultCode() : ?string;
}