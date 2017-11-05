<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Rank Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\RankAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait RankTrait
{
    /**
     * The position in a hierarchy
     *
     * @var float|null
     */
    protected $rank = null;

    /**
     * Set rank
     *
     * @param float|null $position The position in a hierarchy
     *
     * @return self
     */
    public function setRank(?float $position)
    {
        $this->rank = $position;

        return $this;
    }

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
    public function getRank() : ?float 
    {
        if ( ! $this->hasRank()) {
            $this->setRank($this->getDefaultRank());
        }
        return $this->rank;
    }

    /**
     * Check if "rank" has been set
     *
     * @return bool True if "rank" has been set, false if not
     */
    public function hasRank() : bool
    {
        return isset($this->rank);
    }

    /**
     * Get a default "rank" value, if any is available
     *
     * @return float|null Default "rank" value or null if no default value is available
     */
    public function getDefaultRank() : ?float
    {
        return null;
    }
}