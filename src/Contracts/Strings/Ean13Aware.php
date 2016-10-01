<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $ean13 International Article Number (EAN), 13-digit
     *
     * @return void
     */
    public function setEan13($ean13);

    /**
     * Get ean13
     *
     * If no "ean13" value has been set, this method will
     * set and return a default "ean13" value,
     * if any such value is available
     *
     * @see getDefaultEan13()
     *
     * @return string|null "ean13" value or null if no "ean13" value has been set
     */
    public function getEan13();

    /**
     * Get a default "ean13" value, if any is available
     *
     * @return string|null A default "ean13" value or null if no default value is available
     */
    public function getDefaultEan13();

    /**
     * Check if "ean13" has been set
     *
     * @return bool True if "ean13" value has been set, false if not
     */
    public function hasEan13();

    /**
     * Check if a default "ean13" is available or not
     *
     * @return bool True of a default "ean13" value is available, false if not
     */
    public function hasDefaultEan13();
}