<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $code Locale language code, e.g. en_us or other format
     *
     * @return void
     */
    public function setLocale($code);

    /**
     * Get locale
     *
     * If no "locale" value has been set, this method will
     * set and return a default "locale" value,
     * if any such value is available
     *
     * @see getDefaultLocale()
     *
     * @return string|null "locale" value or null if no "locale" value has been set
     */
    public function getLocale();

    /**
     * Get a default "locale" value, if any is available
     *
     * @return string|null A default "locale" value or null if no default value is available
     */
    public function getDefaultLocale();

    /**
     * Check if "locale" has been set
     *
     * @return bool True if "locale" value has been set, false if not
     */
    public function hasLocale();

    /**
     * Check if a default "locale" is available or not
     *
     * @return bool True of a default "locale" value is available, false if not
     */
    public function hasDefaultLocale();
}