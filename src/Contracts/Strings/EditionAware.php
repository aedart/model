<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Edition Aware</h1>
 *
 * Component is aware of a string "edition" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface EditionAware
{
    /**
     * Set edition
     *
     * @param string|null $edition The version of a published text, e.g. book, article, newspaper, report... etc
     *
     * @return self
     */
    public function setEdition(?string $edition);

    /**
     * Get edition
     *
     * If no "edition" value has been set, this method will
     * set and return a default "edition" value,
     * if any such value is available
     *
     * @see getDefaultEdition()
     *
     * @return string|null edition or null if no edition has been set
     */
    public function getEdition() : ?string ;

    /**
     * Check if "edition" has been set
     *
     * @return bool True if "edition" has been set, false if not
     */
    public function hasEdition() : bool;

    /**
     * Get a default "edition" value, if any is available
     *
     * @return string|null Default "edition" value or null if no default value is available
     */
    public function getDefaultEdition() : ?string;
}