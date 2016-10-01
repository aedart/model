<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Formatted Name Aware</h1>
 *
 * Component is aware of a string "formatted name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FormattedNameAware
{
    /**
     * Set formatted name
     *
     * @param string $name Formatted name of someone or something
     *
     * @return void
     */
    public function setFormattedName($name);

    /**
     * Get formatted name
     *
     * If no "formatted name" value has been set, this method will
     * set and return a default "formatted name" value,
     * if any such value is available
     *
     * @see getDefaultFormattedName()
     *
     * @return string|null "formatted name" value or null if no "formatted name" value has been set
     */
    public function getFormattedName();

    /**
     * Get a default "formatted name" value, if any is available
     *
     * @return string|null A default "formatted name" value or null if no default value is available
     */
    public function getDefaultFormattedName();

    /**
     * Check if "formatted name" has been set
     *
     * @return bool True if "formatted name" value has been set, false if not
     */
    public function hasFormattedName();

    /**
     * Check if a default "formatted name" is available or not
     *
     * @return bool True of a default "formatted name" value is available, false if not
     */
    public function hasDefaultFormattedName();
}