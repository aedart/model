<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Postal Code Aware</h1>
 *
 * Component is aware of a string "postal code" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PostalCodeAware
{
    /**
     * Set postal code
     *
     * @param string $code Numeric or Alphanumeric postal code (zip code)
     *
     * @return void
     */
    public function setPostalCode($code);

    /**
     * Get postal code
     *
     * If no "postal code" value has been set, this method will
     * set and return a default "postal code" value,
     * if any such value is available
     *
     * @see getDefaultPostalCode()
     *
     * @return string|null "postal code" value or null if no "postal code" value has been set
     */
    public function getPostalCode();

    /**
     * Get a default "postal code" value, if any is available
     *
     * @return string|null A default "postal code" value or null if no default value is available
     */
    public function getDefaultPostalCode();

    /**
     * Check if "postal code" has been set
     *
     * @return bool True if "postal code" value has been set, false if not
     */
    public function hasPostalCode();

    /**
     * Check if a default "postal code" is available or not
     *
     * @return bool True of a default "postal code" value is available, false if not
     */
    public function hasDefaultPostalCode();
}