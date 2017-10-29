<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $ean International Article Number (EAN)
     *
     * @return self
     */
    public function setEan(?string $ean);

    /**
     * Get ean
     *
     * If no "ean" value has been set, this method will
     * set and return a default "ean" value,
     * if any such value is available
     *
     * @see getDefaultEan()
     *
     * @return string|null ean or null if no ean has been set
     */
    public function getEan() : ?string ;

    /**
     * Check if "ean" has been set
     *
     * @return bool True if "ean" has been set, false if not
     */
    public function hasEan() : bool;

    /**
     * Get a default "ean" value, if any is available
     *
     * @return string|null Default "ean" value or null if no default value is available
     */
    public function getDefaultEan() : ?string;
}