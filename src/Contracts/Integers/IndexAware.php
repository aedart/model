<?php namespace Aedart\Model\Contracts\Integers;

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
     * @param int $index An index
     *
     * @return void
     */
    public function setIndex($index);

    /**
     * Get index
     *
     * If no "index" value has been set, this method will
     * set and return a default "index" value,
     * if any such value is available
     *
     * @see getDefaultIndex()
     *
     * @return int|null "index" value or null if no "index" value has been set
     */
    public function getIndex();

    /**
     * Get a default "index" value, if any is available
     *
     * @return int|null A default "index" value or null if no default value is available
     */
    public function getDefaultIndex();

    /**
     * Check if "index" has been set
     *
     * @return bool True if "index" value has been set, false if not
     */
    public function hasIndex();

    /**
     * Check if a default "index" is available or not
     *
     * @return bool True of a default "index" value is available, false if not
     */
    public function hasDefaultIndex();
}