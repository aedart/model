<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ean13 Aware</h1>
 *
 * Component is aware of a string "ean13" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface Ean13Aware
{
    /**
     * Set ean13
     *
     * @param string|null $ean13 International Article Number (EAN), 13-digit
     *
     * @return self
     */
    public function setEan13(?string $ean13);

    /**
     * Get ean13
     *
     * If no "ean13" value has been set, this method will
     * set and return a default "ean13" value,
     * if any such value is available
     *
     * @see getDefaultEan13()
     *
     * @return string|null ean13 or null if no ean13 has been set
     */
    public function getEan13() : ?string ;

    /**
     * Check if "ean13" has been set
     *
     * @return bool True if "ean13" has been set, false if not
     */
    public function hasEan13() : bool;

    /**
     * Get a default "ean13" value, if any is available
     *
     * @return string|null Default "ean13" value or null if no default value is available
     */
    public function getDefaultEan13() : ?string;
}