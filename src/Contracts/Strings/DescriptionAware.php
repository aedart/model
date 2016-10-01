<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Description Aware</h1>
 *
 * Component is aware of a string "description" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DescriptionAware
{
    /**
     * Set description
     *
     * @param string $description Description
     *
     * @return void
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * If no "description" value has been set, this method will
     * set and return a default "description" value,
     * if any such value is available
     *
     * @see getDefaultDescription()
     *
     * @return string|null "description" value or null if no "description" value has been set
     */
    public function getDescription();

    /**
     * Get a default "description" value, if any is available
     *
     * @return string|null A default "description" value or null if no default value is available
     */
    public function getDefaultDescription();

    /**
     * Check if "description" has been set
     *
     * @return bool True if "description" value has been set, false if not
     */
    public function hasDescription();

    /**
     * Check if a default "description" is available or not
     *
     * @return bool True of a default "description" value is available, false if not
     */
    public function hasDefaultDescription();
}