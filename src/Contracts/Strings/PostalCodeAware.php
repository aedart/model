<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $code Numeric or Alphanumeric postal code (zip code)
     *
     * @return self
     */
    public function setPostalCode(?string $code);

    /**
     * Get postal code
     *
     * If no "postal code" value has been set, this method will
     * set and return a default "postal code" value,
     * if any such value is available
     *
     * @see getDefaultPostalCode()
     *
     * @return string|null postal code or null if no postal code has been set
     */
    public function getPostalCode() : ?string ;

    /**
     * Check if "postal code" has been set
     *
     * @return bool True if "postal code" has been set, false if not
     */
    public function hasPostalCode() : bool;

    /**
     * Get a default "postal code" value, if any is available
     *
     * @return string|null Default "postal code" value or null if no default value is available
     */
    public function getDefaultPostalCode() : ?string;
}