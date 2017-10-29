<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Query Aware</h1>
 *
 * Component is aware of a string "query" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface QueryAware
{
    /**
     * Set query
     *
     * @param string|null $query Query
     *
     * @return self
     */
    public function setQuery(?string $query);

    /**
     * Get query
     *
     * If no "query" value has been set, this method will
     * set and return a default "query" value,
     * if any such value is available
     *
     * @see getDefaultQuery()
     *
     * @return string|null query or null if no query has been set
     */
    public function getQuery() : ?string ;

    /**
     * Check if "query" has been set
     *
     * @return bool True if "query" has been set, false if not
     */
    public function hasQuery() : bool;

    /**
     * Get a default "query" value, if any is available
     *
     * @return string|null Default "query" value or null if no default value is available
     */
    public function getDefaultQuery() : ?string;
}