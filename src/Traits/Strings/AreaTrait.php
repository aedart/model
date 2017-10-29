<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Area Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AreaAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AreaTrait
{
    /**
     * Name of area, e.g. in a building, in a city, outside the city, ...etc
     *
     * @var string|null
     */
    protected $area = null;

    /**
     * Set area
     *
     * @param string|null $name Name of area, e.g. in a building, in a city, outside the city, ...etc
     *
     * @return self
     */
    public function setArea(?string $name)
    {
        $this->area = $name;

        return $this;
    }

    /**
     * Get area
     *
     * If no "area" value has been set, this method will
     * set and return a default "area" value,
     * if any such value is available
     *
     * @see getDefaultArea()
     *
     * @return string|null area or null if no area has been set
     */
    public function getArea() : ?string 
    {
        if ( ! $this->hasArea()) {
            $this->setArea($this->getDefaultArea());
        }
        return $this->area;
    }

    /**
     * Check if "area" has been set
     *
     * @return bool True if "area" has been set, false if not
     */
    public function hasArea() : bool
    {
        return isset($this->area);
    }

    /**
     * Get a default "area" value, if any is available
     *
     * @return string|null Default "area" value or null if no default value is available
     */
    public function getDefaultArea() : ?string
    {
        return null;
    }
}