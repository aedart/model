<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Expires At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ExpiresAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ExpiresAtTrait
{
    /**
     * Date of when this component, entity or resource is going to expire
     *
     * @var int|null
     */
    protected $expiresAt = null;

    /**
     * Set expires at
     *
     * @param int|null $date Date of when this component, entity or resource is going to expire
     *
     * @return self
     */
    public function setExpiresAt(?int $date)
    {
        $this->expiresAt = $date;

        return $this;
    }

    /**
     * Get expires at
     *
     * If no "expires at" value has been set, this method will
     * set and return a default "expires at" value,
     * if any such value is available
     *
     * @see getDefaultExpiresAt()
     *
     * @return int|null expires at or null if no expires at has been set
     */
    public function getExpiresAt() : ?int 
    {
        if ( ! $this->hasExpiresAt()) {
            $this->setExpiresAt($this->getDefaultExpiresAt());
        }
        return $this->expiresAt;
    }

    /**
     * Check if "expires at" has been set
     *
     * @return bool True if "expires at" has been set, false if not
     */
    public function hasExpiresAt() : bool
    {
        return isset($this->expiresAt);
    }

    /**
     * Get a default "expires at" value, if any is available
     *
     * @return int|null Default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt() : ?int
    {
        return null;
    }
}