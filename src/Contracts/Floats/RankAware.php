<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Rank Aware</h1>
 *
 * Component is aware of a float "rank" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface RankAware
{
    /**
     * Set rank
     *
     * @param float|null $position The position in a hierarchy
     *
     * @return self
     */
    public function setRank(?float $position);

    /**
     * Get rank
     *
     * If no "rank" value has been set, this method will
     * set and return a default "rank" value,
     * if any such value is available
     *
     * @see getDefaultRank()
     *
     * @return float|null rank or null if no rank has been set
     */
    public function getRank() : ?float ;

    /**
     * Check if "rank" has been set
     *
     * @return bool True if "rank" has been set, false if not
     */
    public function hasRank() : bool;

    /**
     * Get a default "rank" value, if any is available
     *
     * @return float|null Default "rank" value or null if no default value is available
     */
    public function getDefaultRank() : ?float;
}