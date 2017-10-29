<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Isbn13 Aware</h1>
 *
 * Component is aware of a string "isbn13" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface Isbn13Aware
{
    /**
     * Set isbn13
     *
     * @param string|null $ibn13 International Standard Book Number (ISBN), 13-digits
     *
     * @return self
     */
    public function setIsbn13(?string $ibn13);

    /**
     * Get isbn13
     *
     * If no "isbn13" value has been set, this method will
     * set and return a default "isbn13" value,
     * if any such value is available
     *
     * @see getDefaultIsbn13()
     *
     * @return string|null isbn13 or null if no isbn13 has been set
     */
    public function getIsbn13() : ?string ;

    /**
     * Check if "isbn13" has been set
     *
     * @return bool True if "isbn13" has been set, false if not
     */
    public function hasIsbn13() : bool;

    /**
     * Get a default "isbn13" value, if any is available
     *
     * @return string|null Default "isbn13" value or null if no default value is available
     */
    public function getDefaultIsbn13() : ?string;
}