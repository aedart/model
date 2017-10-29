<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $name Name of a region, state or province
     *
     * @return self
     */
    public function setRegion(?string $name)
    {
        $this->region = $name;

        return $this;
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
     * @return string|null region or null if no region has been set
     */
    public function getRegion() : ?string 
    {
        if ( ! $this->hasRegion()) {
            $this->setRegion($this->getDefaultRegion());
        }
        return $this->region;
    }

    /**
     * Check if "region" has been set
     *
     * @return bool True if "region" has been set, false if not
     */
    public function hasRegion() : bool
    {
        return isset($this->region);
    }

    /**
     * Get a default "region" value, if any is available
     *
     * @return string|null Default "region" value or null if no default value is available
     */
    public function getDefaultRegion() : ?string
    {
        return null;
    }
}