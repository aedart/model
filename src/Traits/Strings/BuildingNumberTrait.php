<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Building Number Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\BuildingNumberAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait BuildingNumberTrait
{
    /**
     * The house number assigned to a building or apartment in a street or area, e.g. 12a
     *
     * @var string|null
     */
    protected $buildingNumber = null;

    /**
     * Set building number
     *
     * @param string|null $number The house number assigned to a building or apartment in a street or area, e.g. 12a
     *
     * @return self
     */
    public function setBuildingNumber(?string $number)
    {
        $this->buildingNumber = $number;

        return $this;
    }

    /**
     * Get building number
     *
     * If no "building number" value has been set, this method will
     * set and return a default "building number" value,
     * if any such value is available
     *
     * @see getDefaultBuildingNumber()
     *
     * @return string|null building number or null if no building number has been set
     */
    public function getBuildingNumber() : ?string 
    {
        if ( ! $this->hasBuildingNumber()) {
            $this->setBuildingNumber($this->getDefaultBuildingNumber());
        }
        return $this->buildingNumber;
    }

    /**
     * Check if "building number" has been set
     *
     * @return bool True if "building number" has been set, false if not
     */
    public function hasBuildingNumber() : bool
    {
        return isset($this->buildingNumber);
    }

    /**
     * Get a default "building number" value, if any is available
     *
     * @return string|null Default "building number" value or null if no default value is available
     */
    public function getDefaultBuildingNumber() : ?string
    {
        return null;
    }
}