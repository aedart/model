<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Released At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ReleasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ReleasedAtTrait
{
    /**
     * Date of when this component, entity or something was released
     *
     * @var int|null
     */
    protected $releasedAt = null;

    /**
     * Set released at
     *
     * @param int|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(?int $date)
    {
        $this->releasedAt = $date;

        return $this;
    }

    /**
     * Get released at
     *
     * If no "released at" value has been set, this method will
     * set and return a default "released at" value,
     * if any such value is available
     *
     * @see getDefaultReleasedAt()
     *
     * @return int|null released at or null if no released at has been set
     */
    public function getReleasedAt() : ?int 
    {
        if ( ! $this->hasReleasedAt()) {
            $this->setReleasedAt($this->getDefaultReleasedAt());
        }
        return $this->releasedAt;
    }

    /**
     * Check if "released at" has been set
     *
     * @return bool True if "released at" has been set, false if not
     */
    public function hasReleasedAt() : bool
    {
        return isset($this->releasedAt);
    }

    /**
     * Get a default "released at" value, if any is available
     *
     * @return int|null Default "released at" value or null if no default value is available
     */
    public function getDefaultReleasedAt() : ?int
    {
        return null;
    }
}