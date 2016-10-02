<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of an area, e.g. in a building, in a city, outside the city, ...etc
     *
     * @var string|null
     */
    protected $area = null;

    /**
     * Set area
     *
     * @param string $name Name of an area, e.g. in a building, in a city, outside the city, ...etc
     *
     * @return void
     */
    public function setArea($name)
    {
        $this->area = (string) $name;
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
     * @return string|null "area" value or null if no "area" value has been set
     */
    public function getArea()
    {
        if (!$this->hasArea() && $this->hasDefaultArea()) {
            $this->setArea($this->getDefaultArea());
        }
        return $this->area;
    }

    /**
     * Get a default "area" value, if any is available
     *
     * @return string|null A default "area" value or null if no default value is available
     */
    public function getDefaultArea()
    {
        return null;
    }

    /**
     * Check if "area" has been set
     *
     * @return bool True if "area" value has been set, false if not
     */
    public function hasArea()
    {
        return isset($this->area);
    }

    /**
     * Check if a default "area" is available or not
     *
     * @return bool True of a default "area" value is available, false if not
     */
    public function hasDefaultArea()
    {
        $default = $this->getDefaultArea();
        return isset($default);
    }
}