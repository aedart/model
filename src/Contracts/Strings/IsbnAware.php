<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Isbn Aware</h1>
 *
 * Component is aware of a string "isbn" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IsbnAware
{
    /**
     * Set isbn
     *
     * @param string|null $isbn International Standard Book Number (ISBN)
     *
     * @return self
     */
    public function setIsbn(?string $isbn);

    /**
     * Get isbn
     *
     * If no "isbn" value has been set, this method will
     * set and return a default "isbn" value,
     * if any such value is available
     *
     * @see getDefaultIsbn()
     *
     * @return string|null isbn or null if no isbn has been set
     */
    public function getIsbn() : ?string ;

    /**
     * Check if "isbn" has been set
     *
     * @return bool True if "isbn" has been set, false if not
     */
    public function hasIsbn() : bool;

    /**
     * Get a default "isbn" value, if any is available
     *
     * @return string|null Default "isbn" value or null if no default value is available
     */
    public function getDefaultIsbn() : ?string;
}