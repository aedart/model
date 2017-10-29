<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Deceased At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DeceasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DeceasedAtTrait
{
    /**
     * Date of when person, animal of something has died
     *
     * @var string|null
     */
    protected $deceasedAt = null;

    /**
     * Set deceased at
     *
     * @param string|null $date Date of when person, animal of something has died
     *
     * @return self
     */
    public function setDeceasedAt(?string $date)
    {
        $this->deceasedAt = $date;

        return $this;
    }

    /**
     * Get deceased at
     *
     * If no "deceased at" value has been set, this method will
     * set and return a default "deceased at" value,
     * if any such value is available
     *
     * @see getDefaultDeceasedAt()
     *
     * @return string|null deceased at or null if no deceased at has been set
     */
    public function getDeceasedAt() : ?string 
    {
        if ( ! $this->hasDeceasedAt()) {
            $this->setDeceasedAt($this->getDefaultDeceasedAt());
        }
        return $this->deceasedAt;
    }

    /**
     * Check if "deceased at" has been set
     *
     * @return bool True if "deceased at" has been set, false if not
     */
    public function hasDeceasedAt() : bool
    {
        return isset($this->deceasedAt);
    }

    /**
     * Get a default "deceased at" value, if any is available
     *
     * @return string|null Default "deceased at" value or null if no default value is available
     */
    public function getDefaultDeceasedAt() : ?string
    {
        return null;
    }
}