<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Released At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ReleasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ReleasedAtTrait
{
    /**
     * Date of when this component, entity or something was released
     *
     * @var string|null
     */
    protected $releasedAt = null;

    /**
     * Set released at
     *
     * @param string|null $date Date of when this component, entity or something was released
     *
     * @return self
     */
    public function setReleasedAt(?string $date)
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
     * @return string|null released at or null if no released at has been set
     */
    public function getReleasedAt() : ?string 
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
     * @return string|null Default "released at" value or null if no default value is available
     */
    public function getDefaultReleasedAt() : ?string
    {
        return null;
    }
}