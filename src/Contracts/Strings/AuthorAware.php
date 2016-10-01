<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Author Aware</h1>
 *
 * Component is aware of a string "author" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AuthorAware
{
    /**
     * Set author
     *
     * @param string $name Name of an author
     *
     * @return void
     */
    public function setAuthor($name);

    /**
     * Get author
     *
     * If no "author" value has been set, this method will
     * set and return a default "author" value,
     * if any such value is available
     *
     * @see getDefaultAuthor()
     *
     * @return string|null "author" value or null if no "author" value has been set
     */
    public function getAuthor();

    /**
     * Get a default "author" value, if any is available
     *
     * @return string|null A default "author" value or null if no default value is available
     */
    public function getDefaultAuthor();

    /**
     * Check if "author" has been set
     *
     * @return bool True if "author" value has been set, false if not
     */
    public function hasAuthor();

    /**
     * Check if a default "author" is available or not
     *
     * @return bool True of a default "author" value is available, false if not
     */
    public function hasDefaultAuthor();
}