<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Isbn10 Aware</h1>
 *
 * Component is aware of a string "isbn10" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface Isbn10Aware
{
    /**
     * Set isbn10
     *
     * @param string|null $isbn10 International Standard Book Number (ISBN), 10-digits
     *
     * @return self
     */
    public function setIsbn10(?string $isbn10);

    /**
     * Get isbn10
     *
     * If no "isbn10" value has been set, this method will
     * set and return a default "isbn10" value,
     * if any such value is available
     *
     * @see getDefaultIsbn10()
     *
     * @return string|null isbn10 or null if no isbn10 has been set
     */
    public function getIsbn10() : ?string ;

    /**
     * Check if "isbn10" has been set
     *
     * @return bool True if "isbn10" has been set, false if not
     */
    public function hasIsbn10() : bool;

    /**
     * Get a default "isbn10" value, if any is available
     *
     * @return string|null Default "isbn10" value or null if no default value is available
     */
    public function getDefaultIsbn10() : ?string;
}