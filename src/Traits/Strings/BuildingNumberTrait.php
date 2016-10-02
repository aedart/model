<?php namespace Aedart\Model\Traits\Strings;

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
     * The house number assigned to a building in a street or area
     *
     * @var string|null
     */
    protected $buildingNumber = null;

    /**
     * Set building number
     *
     * @param string $number The house number assigned to a building or apartment in a street or area, e.g. 12a
     *
     * @return void
     */
    public function setBuildingNumber($number)
    {
        $this->buildingNumber = (string) $number;
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
     * @return string|null "building number" value or null if no "building number" value has been set
     */
    public function getBuildingNumber()
    {
        if (!$this->hasBuildingNumber() && $this->hasDefaultBuildingNumber()) {
            $this->setBuildingNumber($this->getDefaultBuildingNumber());
        }
        return $this->buildingNumber;
    }

    /**
     * Get a default "building number" value, if any is available
     *
     * @return string|null A default "building number" value or null if no default value is available
     */
    public function getDefaultBuildingNumber()
    {
        return null;
    }

    /**
     * Check if "building number" has been set
     *
     * @return bool True if "building number" value has been set, false if not
     */
    public function hasBuildingNumber()
    {
        return isset($this->buildingNumber);
    }

    /**
     * Check if a default "building number" is available or not
     *
     * @return bool True of a default "building number" value is available, false if not
     */
    public function hasDefaultBuildingNumber()
    {
        $default = $this->getDefaultBuildingNumber();
        return isset($default);
    }
}