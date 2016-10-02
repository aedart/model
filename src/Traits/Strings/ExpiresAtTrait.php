<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $date Date of when this component, entity or resource is going to expire
     *
     * @return void
     */
    public function setExpiresAt($date)
    {
        $this->expiresAt = (string) $date;
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
     * @return string|null "expires at" value or null if no "expires at" value has been set
     */
    public function getExpiresAt()
    {
        if (!$this->hasExpiresAt() && $this->hasDefaultExpiresAt()) {
            $this->setExpiresAt($this->getDefaultExpiresAt());
        }
        return $this->expiresAt;
    }

    /**
     * Get a default "expires at" value, if any is available
     *
     * @return string|null A default "expires at" value or null if no default value is available
     */
    public function getDefaultExpiresAt()
    {
        return null;
    }

    /**
     * Check if "expires at" has been set
     *
     * @return bool True if "expires at" value has been set, false if not
     */
    public function hasExpiresAt()
    {
        return isset($this->expiresAt);
    }

    /**
     * Check if a default "expires at" is available or not
     *
     * @return bool True of a default "expires at" value is available, false if not
     */
    public function hasDefaultExpiresAt()
    {
        $default = $this->getDefaultExpiresAt();
        return isset($default);
    }
}