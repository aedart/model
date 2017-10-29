<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Index Aware</h1>
 *
 * Component is aware of a string "index" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IndexAware
{
    /**
     * Set index
     *
     * @param string|null $index Index
     *
     * @return self
     */
    public function setIndex(?string $index);

    /**
     * Get index
     *
     * If no "index" value has been set, this method will
     * set and return a default "index" value,
     * if any such value is available
     *
     * @see getDefaultIndex()
     *
     * @return string|null index or null if no index has been set
     */
    public function getIndex() : ?string ;

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" has been set, false if not
     */
    public function hasIndex() : bool;

    /**
     * Get a default "index" value, if any is available
     *
     * @return string|null Default "index" value or null if no default value is available
     */
    public function getDefaultIndex() : ?string;
}