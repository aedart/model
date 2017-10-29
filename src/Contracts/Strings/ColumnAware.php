<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Column Aware</h1>
 *
 * Component is aware of a string "column" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ColumnAware
{
    /**
     * Set column
     *
     * @param string|null $name Name of column
     *
     * @return self
     */
    public function setColumn(?string $name);

    /**
     * Get column
     *
     * If no "column" value has been set, this method will
     * set and return a default "column" value,
     * if any such value is available
     *
     * @see getDefaultColumn()
     *
     * @return string|null column or null if no column has been set
     */
    public function getColumn() : ?string ;

    /**
     * Check if "column" has been set
     *
     * @return bool True if "column" has been set, false if not
     */
    public function hasColumn() : bool;

    /**
     * Get a default "column" value, if any is available
     *
     * @return string|null Default "column" value or null if no default value is available
     */
    public function getDefaultColumn() : ?string;
}