<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Title Aware</h1>
 *
 * Component is aware of a string "title" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TitleAware
{
    /**
     * Set title
     *
     * @param string $title Title of a publication, a person, a job... etc
     *
     * @return void
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * If no "title" value has been set, this method will
     * set and return a default "title" value,
     * if any such value is available
     *
     * @see getDefaultTitle()
     *
     * @return string|null "title" value or null if no "title" value has been set
     */
    public function getTitle();

    /**
     * Get a default "title" value, if any is available
     *
     * @return string|null A default "title" value or null if no default value is available
     */
    public function getDefaultTitle();

    /**
     * Check if "title" has been set
     *
     * @return bool True if "title" value has been set, false if not
     */
    public function hasTitle();

    /**
     * Check if a default "title" is available or not
     *
     * @return bool True of a default "title" value is available, false if not
     */
    public function hasDefaultTitle();
}