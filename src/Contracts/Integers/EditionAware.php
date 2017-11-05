<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Edition Aware</h1>
 *
 * Component is aware of a int "edition" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface EditionAware
{
    /**
     * Set edition
     *
     * @param int|null $edition The version of a published text, e.g. book, article, newspaper, report... etc
     *
     * @return self
     */
    public function setEdition(?int $edition);

    /**
     * Get edition
     *
     * If no "edition" value has been set, this method will
     * set and return a default "edition" value,
     * if any such value is available
     *
     * @see getDefaultEdition()
     *
     * @return int|null edition or null if no edition has been set
     */
    public function getEdition() : ?int ;

    /**
     * Check if "edition" has been set
     *
     * @return bool True if "edition" has been set, false if not
     */
    public function hasEdition() : bool;

    /**
     * Get a default "edition" value, if any is available
     *
     * @return int|null Default "edition" value or null if no default value is available
     */
    public function getDefaultEdition() : ?int;
}