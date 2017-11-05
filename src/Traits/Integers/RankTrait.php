<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Rank Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\RankAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait RankTrait
{
    /**
     * The position in a hierarchy
     *
     * @var int|null
     */
    protected $rank = null;

    /**
     * Set rank
     *
     * @param int|null $position The position in a hierarchy
     *
     * @return self
     */
    public function setRank(?int $position)
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
     * @return int|null rank or null if no rank has been set
     */
    public function getRank() : ?int 
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
     * @return int|null Default "rank" value or null if no default value is available
     */
    public function getDefaultRank() : ?int
    {
        return null;
    }
}