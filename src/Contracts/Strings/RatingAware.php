<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Rating Aware</h1>
 *
 * Component is aware of a string "rating" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface RatingAware
{
    /**
     * Set rating
     *
     * @param string|null $score The rating of something
     *
     * @return self
     */
    public function setRating(?string $score);

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
    public function getRating() : ?string ;

    /**
     * Check if "rating" has been set
     *
     * @return bool True if "rating" has been set, false if not
     */
    public function hasRating() : bool;

    /**
     * Get a default "rating" value, if any is available
     *
     * @return string|null Default "rating" value or null if no default value is available
     */
    public function getDefaultRating() : ?string;
}