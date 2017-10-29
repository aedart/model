<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Index Aware</h1>
 *
 * Component is aware of a int "index" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface IndexAware
{
    /**
     * Set index
     *
     * @param int|null $index Index
     *
     * @return self
     */
    public function setIndex(?int $index);

    /**
     * Get index
     *
     * If no "index" value has been set, this method will
     * set and return a default "index" value,
     * if any such value is available
     *
     * @see getDefaultIndex()
     *
     * @return int|null index or null if no index has been set
     */
    public function getIndex() : ?int ;

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" has been set, false if not
     */
    public function hasIndex() : bool;

    /**
     * Get a default "index" value, if any is available
     *
     * @return int|null Default "index" value or null if no default value is available
     */
    public function getDefaultIndex() : ?int;
}