<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Label Aware</h1>
 *
 * Component is aware of a string "label" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LabelAware
{
    /**
     * Set label
     *
     * @param string $name Label name
     *
     * @return void
     */
    public function setLabel($name);

    /**
     * Get label
     *
     * If no "label" value has been set, this method will
     * set and return a default "label" value,
     * if any such value is available
     *
     * @see getDefaultLabel()
     *
     * @return string|null "label" value or null if no "label" value has been set
     */
    public function getLabel();

    /**
     * Get a default "label" value, if any is available
     *
     * @return string|null A default "label" value or null if no default value is available
     */
    public function getDefaultLabel();

    /**
     * Check if "label" has been set
     *
     * @return bool True if "label" value has been set, false if not
     */
    public function hasLabel();

    /**
     * Check if a default "label" is available or not
     *
     * @return bool True of a default "label" value is available, false if not
     */
    public function hasDefaultLabel();
}