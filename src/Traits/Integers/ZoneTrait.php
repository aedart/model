<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Zone Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ZoneAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ZoneTrait
{
    /**
     * Name or identifier of area, district or division
     *
     * @var int|null
     */
    protected $zone = null;

    /**
     * Set zone
     *
     * @param int|null $identifier Name or identifier of area, district or division
     *
     * @return self
     */
    public function setZone(?int $identifier)
    {
        $this->zone = $identifier;

        return $this;
    }

    /**
     * Get zone
     *
     * If no "zone" value has been set, this method will
     * set and return a default "zone" value,
     * if any such value is available
     *
     * @see getDefaultZone()
     *
     * @return int|null zone or null if no zone has been set
     */
    public function getZone() : ?int 
    {
        if ( ! $this->hasZone()) {
            $this->setZone($this->getDefaultZone());
        }
        return $this->zone;
    }

    /**
     * Check if "zone" has been set
     *
     * @return bool True if "zone" has been set, false if not
     */
    public function hasZone() : bool
    {
        return isset($this->zone);
    }

    /**
     * Get a default "zone" value, if any is available
     *
     * @return int|null Default "zone" value or null if no default value is available
     */
    public function getDefaultZone() : ?int
    {
        return null;
    }
}