<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Rating Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\RatingAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait RatingTrait
{
    /**
     * The rating of something
     *
     * @var string|null
     */
    protected $rating = null;

    /**
     * Set rating
     *
     * @param string|null $score The rating of something
     *
     * @return self
     */
    public function setRating(?string $score)
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
     * @return string|null rating or null if no rating has been set
     */
    public function getRating() : ?string 
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
     * @return string|null Default "rating" value or null if no default value is available
     */
    public function getDefaultRating() : ?string
    {
        return null;
    }
}