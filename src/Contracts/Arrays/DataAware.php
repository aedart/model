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
 * @package Aedart\Model\Traits\Arrays
 */
interface DataAware {

    /**
     * Set the given data
     *
     * @param array $values Data - A list (array) containing a set of values
     *
     * @return void
     */
    public function setData(array $values);

    /**
     * Get the given data
     *
     * If no data has been set, this method will
     * set and return a default data, if any such
     * value is available
     *
     * @see getDefaultData()
     *
     * @return array|null data or null if none data has been set
     */
    public function getData();

    /**
     * Get a default data value, if any is available
     *
     * @return array|null A default data value or Null if no default value is available
     */
    public function getDefaultData();

    /**
     * Check if data has been set
     *
     * @return bool True if data has been set, false if not
     */
    public function hasData();

    /**
     * Check if a default data is available or not
     *
     * @return bool True of a default data is available, false if not
     */
    public function hasDefaultData();
}