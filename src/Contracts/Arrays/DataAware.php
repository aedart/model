<?php

namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Data Aware</h1>
 *
 * Component is aware of a array "data" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface DataAware
{
    /**
     * Set data
     *
     * @param array|null $values A list (array) containing a set of values
     *
     * @return self
     */
    public function setData(?array $values);

    /**
     * Get data
     *
     * If no "data" value has been set, this method will
     * set and return a default "data" value,
     * if any such value is available
     *
     * @see getDefaultData()
     *
     * @return array|null data or null if no data has been set
     */
    public function getData() : ?array ;

    /**
     * Check if "data" has been set
     *
     * @return bool True if "data" has been set, false if not
     */
    public function hasData() : bool;

    /**
     * Get a default "data" value, if any is available
     *
     * @return array|null Default "data" value or null if no default value is available
     */
    public function getDefaultData() : ?array;
}