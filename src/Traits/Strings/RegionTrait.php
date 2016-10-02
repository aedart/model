<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Region Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\RegionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait RegionTrait
{
    /**
     * Name of a region, state or province
     *
     * @var string|null
     */
    protected $region = null;

    /**
     * Set region
     *
     * @param string $name Name of a region, state or province
     *
     * @return void
     */
    public function setRegion($name)
    {
        $this->region = (string) $name;
    }

    /**
     * Get region
     *
     * If no "region" value has been set, this method will
     * set and return a default "region" value,
     * if any such value is available
     *
     * @see getDefaultRegion()
     *
     * @return string|null "region" value or null if no "region" value has been set
     */
    public function getRegion()
    {
        if (!$this->hasRegion() && $this->hasDefaultRegion()) {
            $this->setRegion($this->getDefaultRegion());
        }
        return $this->region;
    }

    /**
     * Get a default "region" value, if any is available
     *
     * @return string|null A default "region" value or null if no default value is available
     */
    public function getDefaultRegion()
    {
        return null;
    }

    /**
     * Check if "region" has been set
     *
     * @return bool True if "region" value has been set, false if not
     */
    public function hasRegion()
    {
        return isset($this->region);
    }

    /**
     * Check if a default "region" is available or not
     *
     * @return bool True of a default "region" value is available, false if not
     */
    public function hasDefaultRegion()
    {
        $default = $this->getDefaultRegion();
        return isset($default);
    }
}