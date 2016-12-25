<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Deceased At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DeceasedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DeceasedAtTrait
{
    /**
     * Date (UNIX timestamp) of when a person, animal of something has died
     *
     * @var int|null
     */
    protected $deceasedAt = null;

    /**
     * Set deceased at
     *
     * @param int $date Date (UNIX timestamp) of when a person, animal of something has died
     *
     * @return void
     */
    public function setDeceasedAt($date)
    {
        $this->deceasedAt = (int) $date;
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
     * @return int|null "deceased at" value or null if no "deceased at" value has been set
     */
    public function getDeceasedAt()
    {
        if (!$this->hasDeceasedAt() && $this->hasDefaultDeceasedAt()) {
            $this->setDeceasedAt($this->getDefaultDeceasedAt());
        }
        return $this->deceasedAt;
    }

    /**
     * Get a default "deceased at" value, if any is available
     *
     * @return int|null A default "deceased at" value or null if no default value is available
     */
    public function getDefaultDeceasedAt()
    {
        return null;
    }

    /**
     * Check if "deceased at" has been set
     *
     * @return bool True if "deceased at" value has been set, false if not
     */
    public function hasDeceasedAt()
    {
        return isset($this->deceasedAt);
    }

    /**
     * Check if a default "deceased at" is available or not
     *
     * @return bool True of a default "deceased at" value is available, false if not
     */
    public function hasDefaultDeceasedAt()
    {
        $default = $this->getDefaultDeceasedAt();
        return isset($default);
    }
}