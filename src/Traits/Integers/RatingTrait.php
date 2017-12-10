<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Rating Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\RatingAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait RatingTrait
{
    /**
     * The rating of something
     *
     * @var int|null
     */
    protected $rating = null;

    /**
     * Set rating
     *
     * @param int|null $score The rating of something
     *
     * @return self
     */
    public function setRating(?int $score)
    {
        $this->rating = $score;

        return $this;
    }

    /**
     * Get rating
     *
     * If no "rating" value has been set, this method will
     * set and return a default "rating" value,
     * if any such value is available
     *
     * @see getDefaultRating()
     *
     * @return int|null rating or null if no rating has been set
     */
    public function getRating() : ?int 
    {
        if ( ! $this->hasRating()) {
            $this->setRating($this->getDefaultRating());
        }
        return $this->rating;
    }

    /**
     * Check if "rating" has been set
     *
     * @return bool True if "rating" has been set, false if not
     */
    public function hasRating() : bool
    {
        return isset($this->rating);
    }

    /**
     * Get a default "rating" value, if any is available
     *
     * @return int|null Default "rating" value or null if no default value is available
     */
    public function getDefaultRating() : ?int
    {
        return null;
    }
}