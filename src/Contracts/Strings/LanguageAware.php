<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $identifier Name or identifier of a language
     *
     * @return self
     */
    public function setLanguage(?string $identifier);

    /**
     * Get language
     *
     * If no "language" value has been set, this method will
     * set and return a default "language" value,
     * if any such value is available
     *
     * @see getDefaultLanguage()
     *
     * @return string|null language or null if no language has been set
     */
    public function getLanguage() : ?string ;

    /**
     * Check if "language" has been set
     *
     * @return bool True if "language" has been set, false if not
     */
    public function hasLanguage() : bool;

    /**
     * Get a default "language" value, if any is available
     *
     * @return string|null Default "language" value or null if no default value is available
     */
    public function getDefaultLanguage() : ?string;
}