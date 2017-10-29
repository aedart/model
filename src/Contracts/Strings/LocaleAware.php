<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Locale Aware</h1>
 *
 * Component is aware of a string "locale" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LocaleAware
{
    /**
     * Set locale
     *
     * @param string|null $code Locale language code, e.g. en_us or other format
     *
     * @return self
     */
    public function setLocale(?string $code);

    /**
     * Get locale
     *
     * If no "locale" value has been set, this method will
     * set and return a default "locale" value,
     * if any such value is available
     *
     * @see getDefaultLocale()
     *
     * @return string|null locale or null if no locale has been set
     */
    public function getLocale() : ?string ;

    /**
     * Check if "locale" has been set
     *
     * @return bool True if "locale" has been set, false if not
     */
    public function hasLocale() : bool;

    /**
     * Get a default "locale" value, if any is available
     *
     * @return string|null Default "locale" value or null if no default value is available
     */
    public function getDefaultLocale() : ?string;
}