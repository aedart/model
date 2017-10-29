<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Prefix Aware</h1>
 *
 * Component is aware of a string "prefix" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PrefixAware
{
    /**
     * Set prefix
     *
     * @param string|null $prefix Prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix);

    /**
     * Get prefix
     *
     * If no "prefix" value has been set, this method will
     * set and return a default "prefix" value,
     * if any such value is available
     *
     * @see getDefaultPrefix()
     *
     * @return string|null prefix or null if no prefix has been set
     */
    public function getPrefix() : ?string ;

    /**
     * Check if "prefix" has been set
     *
     * @return bool True if "prefix" has been set, false if not
     */
    public function hasPrefix() : bool;

    /**
     * Get a default "prefix" value, if any is available
     *
     * @return string|null Default "prefix" value or null if no default value is available
     */
    public function getDefaultPrefix() : ?string;
}