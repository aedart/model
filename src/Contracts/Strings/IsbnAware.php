<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $isbn International Standard Book Number (ISBN)
     *
     * @return void
     */
    public function setIsbn($isbn);

    /**
     * Get isbn
     *
     * If no "isbn" value has been set, this method will
     * set and return a default "isbn" value,
     * if any such value is available
     *
     * @see getDefaultIsbn()
     *
     * @return string|null "isbn" value or null if no "isbn" value has been set
     */
    public function getIsbn();

    /**
     * Get a default "isbn" value, if any is available
     *
     * @return string|null A default "isbn" value or null if no default value is available
     */
    public function getDefaultIsbn();

    /**
     * Check if "isbn" has been set
     *
     * @return bool True if "isbn" value has been set, false if not
     */
    public function hasIsbn();

    /**
     * Check if a default "isbn" is available or not
     *
     * @return bool True of a default "isbn" value is available, false if not
     */
    public function hasDefaultIsbn();
}