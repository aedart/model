<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Suffix Aware</h1>
 *
 * Component is aware of a string "suffix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SuffixAware
{
    /**
     * Set suffix
     *
     * @param string|null $suffix Suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix);

    /**
     * Get suffix
     *
     * If no "suffix" value has been set, this method will
     * set and return a default "suffix" value,
     * if any such value is available
     *
     * @see getDefaultSuffix()
     *
     * @return string|null suffix or null if no suffix has been set
     */
    public function getSuffix() : ?string ;

    /**
     * Check if "suffix" has been set
     *
     * @return bool True if "suffix" has been set, false if not
     */
    public function hasSuffix() : bool;

    /**
     * Get a default "suffix" value, if any is available
     *
     * @return string|null Default "suffix" value or null if no default value is available
     */
    public function getDefaultSuffix() : ?string;
}