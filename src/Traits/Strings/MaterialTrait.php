<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Material Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\MaterialAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait MaterialTrait
{
    /**
     * Name or identifier of a material, e.g. leather, wool, cotton, paper.
     *
     * @var string|null
     */
    protected $material = null;

    /**
     * Set material
     *
     * @param string|null $identifier Name or identifier of a material, e.g. leather, wool, cotton, paper.
     *
     * @return self
     */
    public function setMaterial(?string $identifier)
    {
        $this->material = $identifier;

        return $this;
    }

    /**
     * Get material
     *
     * If no "material" value has been set, this method will
     * set and return a default "material" value,
     * if any such value is available
     *
     * @see getDefaultMaterial()
     *
     * @return string|null material or null if no material has been set
     */
    public function getMaterial() : ?string 
    {
        if ( ! $this->hasMaterial()) {
            $this->setMaterial($this->getDefaultMaterial());
        }
        return $this->material;
    }

    /**
     * Check if "material" has been set
     *
     * @return bool True if "material" has been set, false if not
     */
    public function hasMaterial() : bool
    {
        return isset($this->material);
    }

    /**
     * Get a default "material" value, if any is available
     *
     * @return string|null Default "material" value or null if no default value is available
     */
    public function getDefaultMaterial() : ?string
    {
        return null;
    }
}