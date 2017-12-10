<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Produced At Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ProducedAtAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ProducedAtTrait
{
    /**
     * Date of when this component, entity or something was produced
     *
     * @var string|null
     */
    protected $producedAt = null;

    /**
     * Set produced at
     *
     * @param string|null $date Date of when this component, entity or something was produced
     *
     * @return self
     */
    public function setProducedAt(?string $date)
    {
        $this->producedAt = $date;

        return $this;
    }

    /**
     * Get produced at
     *
     * If no "produced at" value has been set, this method will
     * set and return a default "produced at" value,
     * if any such value is available
     *
     * @see getDefaultProducedAt()
     *
     * @return string|null produced at or null if no produced at has been set
     */
    public function getProducedAt() : ?string 
    {
        if ( ! $this->hasProducedAt()) {
            $this->setProducedAt($this->getDefaultProducedAt());
        }
        return $this->producedAt;
    }

    /**
     * Check if "produced at" has been set
     *
     * @return bool True if "produced at" has been set, false if not
     */
    public function hasProducedAt() : bool
    {
        return isset($this->producedAt);
    }

    /**
     * Get a default "produced at" value, if any is available
     *
     * @return string|null Default "produced at" value or null if no default value is available
     */
    public function getDefaultProducedAt() : ?string
    {
        return null;
    }
}