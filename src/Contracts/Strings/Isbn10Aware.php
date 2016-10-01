<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $isbn10 International Standard Book Number (ISBN), 10-digit
     *
     * @return void
     */
    public function setIsbn10($isbn10);

    /**
     * Get isbn10
     *
     * If no "isbn10" value has been set, this method will
     * set and return a default "isbn10" value,
     * if any such value is available
     *
     * @see getDefaultIsbn10()
     *
     * @return string|null "isbn10" value or null if no "isbn10" value has been set
     */
    public function getIsbn10();

    /**
     * Get a default "isbn10" value, if any is available
     *
     * @return string|null A default "isbn10" value or null if no default value is available
     */
    public function getDefaultIsbn10();

    /**
     * Check if "isbn10" has been set
     *
     * @return bool True if "isbn10" value has been set, false if not
     */
    public function hasIsbn10();

    /**
     * Check if a default "isbn10" is available or not
     *
     * @return bool True of a default "isbn10" value is available, false if not
     */
    public function hasDefaultIsbn10();
}