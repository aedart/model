<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Ean Aware</h1>
 *
 * Component is aware of a string "ean" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EanAware
{
    /**
     * Set ean
     *
     * @param string $ean International Article Number (EAN)
     *
     * @return void
     */
    public function setEan($ean);

    /**
     * Get ean
     *
     * If no "ean" value has been set, this method will
     * set and return a default "ean" value,
     * if any such value is available
     *
     * @see getDefaultEan()
     *
     * @return string|null "ean" value or null if no "ean" value has been set
     */
    public function getEan();

    /**
     * Get a default "ean" value, if any is available
     *
     * @return string|null A default "ean" value or null if no default value is available
     */
    public function getDefaultEan();

    /**
     * Check if "ean" has been set
     *
     * @return bool True if "ean" value has been set, false if not
     */
    public function hasEan();

    /**
     * Check if a default "ean" is available or not
     *
     * @return bool True of a default "ean" value is available, false if not
     */
    public function hasDefaultEan();
}