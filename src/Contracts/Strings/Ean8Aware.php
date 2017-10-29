<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ean8 Aware</h1>
 *
 * Component is aware of a string "ean8" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface Ean8Aware
{
    /**
     * Set ean8
     *
     * @param string|null $ean8 International Article Number (EAN), 8-digit
     *
     * @return self
     */
    public function setEan8(?string $ean8);

    /**
     * Get ean8
     *
     * If no "ean8" value has been set, this method will
     * set and return a default "ean8" value,
     * if any such value is available
     *
     * @see getDefaultEan8()
     *
     * @return string|null ean8 or null if no ean8 has been set
     */
    public function getEan8() : ?string ;

    /**
     * Check if "ean8" has been set
     *
     * @return bool True if "ean8" has been set, false if not
     */
    public function hasEan8() : bool;

    /**
     * Get a default "ean8" value, if any is available
     *
     * @return string|null Default "ean8" value or null if no default value is available
     */
    public function getDefaultEan8() : ?string;
}