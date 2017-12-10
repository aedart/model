<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Release Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ReleaseDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ReleaseDateTrait
{
    /**
     * Date of planned release
     *
     * @var int|null
     */
    protected $releaseDate = null;

    /**
     * Set release date
     *
     * @param int|null $date Date of planned release
     *
     * @return self
     */
    public function setReleaseDate(?int $date)
    {
        $this->releaseDate = $date;

        return $this;
    }

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
    public function getReleaseDate() : ?int 
    {
        if ( ! $this->hasReleaseDate()) {
            $this->setReleaseDate($this->getDefaultReleaseDate());
        }
        return $this->releaseDate;
    }

    /**
     * Check if "release date" has been set
     *
     * @return bool True if "release date" has been set, false if not
     */
    public function hasReleaseDate() : bool
    {
        return isset($this->releaseDate);
    }

    /**
     * Get a default "release date" value, if any is available
     *
     * @return int|null Default "release date" value or null if no default value is available
     */
    public function getDefaultReleaseDate() : ?int
    {
        return null;
    }
}