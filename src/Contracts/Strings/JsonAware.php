<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Json Aware</h1>
 *
 * Component is aware of a string "json" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface JsonAware
{
    /**
     * Set json
     *
     * @param string $json JavaScript Object Notation (JSON)
     *
     * @return void
     */
    public function setJson($json);

    /**
     * Get json
     *
     * If no "json" value has been set, this method will
     * set and return a default "json" value,
     * if any such value is available
     *
     * @see getDefaultJson()
     *
     * @return string|null "json" value or null if no "json" value has been set
     */
    public function getJson();

    /**
     * Get a default "json" value, if any is available
     *
     * @return string|null A default "json" value or null if no default value is available
     */
    public function getDefaultJson();

    /**
     * Check if "json" has been set
     *
     * @return bool True if "json" value has been set, false if not
     */
    public function hasJson();

    /**
     * Check if a default "json" is available or not
     *
     * @return bool True of a default "json" value is available, false if not
     */
    public function hasDefaultJson();
}