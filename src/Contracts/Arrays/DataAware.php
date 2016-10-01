<?php namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Data Aware</h1>
 *
 * Components are able to specify and retrieve a set of values. Depending
 * upon context, that set can be anything; key-value pairs, collection of
 * numbers, characters, or perhaps more complex data-structure, such as
 * a objects and or object-references.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface DataAware
{
    /**
     * Set data
     *
     * @param array $values A list (array) containing a set of values
     *
     * @return void
     */
    public function setData(array $values);

    /**
     * Get data
     *
     * If no "data" value has been set, this method will
     * set and return a default "data" value,
     * if any such value is available
     *
     * @see getDefaultData()
     *
     * @return array|null "data" value or null if no "data" value has been set
     */
    public function getData();

    /**
     * Get a default "data" value, if any is available
     *
     * @return array|null A default "data" value or null if no default value is available
     */
    public function getDefaultData();

    /**
     * Check if "data" has been set
     *
     * @return bool True if "data" value has been set, false if not
     */
    public function hasData();

    /**
     * Check if a default "data" is available or not
     *
     * @return bool True of a default "data" value is available, false if not
     */
    public function hasDefaultData();
}