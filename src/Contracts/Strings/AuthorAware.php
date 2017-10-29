<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of author
     *
     * @return self
     */
    public function setAuthor(?string $name);

    /**
     * Get author
     *
     * If no "author" value has been set, this method will
     * set and return a default "author" value,
     * if any such value is available
     *
     * @see getDefaultAuthor()
     *
     * @return string|null author or null if no author has been set
     */
    public function getAuthor() : ?string ;

    /**
     * Check if "author" has been set
     *
     * @return bool True if "author" has been set, false if not
     */
    public function hasAuthor() : bool;

    /**
     * Get a default "author" value, if any is available
     *
     * @return string|null Default "author" value or null if no default value is available
     */
    public function getDefaultAuthor() : ?string;
}