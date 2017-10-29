<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Sql Aware</h1>
 *
 * Component is aware of a string "sql" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SqlAware
{
    /**
     * Set sql
     *
     * @param string|null $query A Structured Query Language (SQL) query
     *
     * @return self
     */
    public function setSql(?string $query);

    /**
     * Get sql
     *
     * If no "sql" value has been set, this method will
     * set and return a default "sql" value,
     * if any such value is available
     *
     * @see getDefaultSql()
     *
     * @return string|null sql or null if no sql has been set
     */
    public function getSql() : ?string ;

    /**
     * Check if "sql" has been set
     *
     * @return bool True if "sql" has been set, false if not
     */
    public function hasSql() : bool;

    /**
     * Get a default "sql" value, if any is available
     *
     * @return string|null Default "sql" value or null if no default value is available
     */
    public function getDefaultSql() : ?string;
}