<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Release Date Aware</h1>
 *
 * Component is aware of a int "release date" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ReleaseDateAware
{
    /**
     * Set release date
     *
     * @param int|null $date Date of planned release
     *
     * @return self
     */
    public function setReleaseDate(?int $date);

    /**
     * Get release date
     *
     * If no "release date" value has been set, this method will
     * set and return a default "release date" value,
     * if any such value is available
     *
     * @see getDefaultReleaseDate()
     *
     * @return int|null release date or null if no release date has been set
     */
    public function getReleaseDate() : ?int ;

    /**
     * Check if "release date" has been set
     *
     * @return bool True if "release date" has been set, false if not
     */
    public function hasReleaseDate() : bool;

    /**
     * Get a default "release date" value, if any is available
     *
     * @return int|null Default "release date" value or null if no default value is available
     */
    public function getDefaultReleaseDate() : ?int;
}