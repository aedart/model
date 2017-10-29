<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Expires At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ExpiresAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ExpiresAtTrait
{
    /**
     * Date of when this component, entity or resource is going to expire
     *
     * @var string|null
     */
    protected $expiresAt = null;

    /**
     * Set expires at
     *
     * @param string|null $date Date of when this component, entity or resource is going to expire
     *
     * @return self
     */
    public function setExpiresAt(?string $date)
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
     * @return string|null expires at or null if no expires at has been set
     */
    public function getExpiresAt() : ?string 
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
     * @return string|null Default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt() : ?string
    {
        return null;
    }
}