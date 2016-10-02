<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Language Aware</h1>
 *
 * Component is aware of a string "language" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LanguageAware
{
    /**
     * Set language
     *
     * @param string $language Name or identifier of a language
     *
     * @return void
     */
    public function setLanguage($language);

    /**
     * Get language
     *
     * If no "language" value has been set, this method will
     * set and return a default "language" value,
     * if any such value is available
     *
     * @see getDefaultLanguage()
     *
     * @return string|null "language" value or null if no "language" value has been set
     */
    public function getLanguage();

    /**
     * Get a default "language" value, if any is available
     *
     * @return string|null A default "language" value or null if no default value is available
     */
    public function getDefaultLanguage();

    /**
     * Check if "language" has been set
     *
     * @return bool True if "language" value has been set, false if not
     */
    public function hasLanguage();

    /**
     * Check if a default "language" is available or not
     *
     * @return bool True of a default "language" value is available, false if not
     */
    public function hasDefaultLanguage();
}