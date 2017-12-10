<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Material Aware</h1>
 *
 * Component is aware of a string "material" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MaterialAware
{
    /**
     * Set material
     *
     * @param string|null $identifier Name or identifier of a material, e.g. leather, wool, cotton, paper.
     *
     * @return self
     */
    public function setMaterial(?string $identifier);

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
    public function getMaterial() : ?string ;

    /**
     * Check if "material" has been set
     *
     * @return bool True if "material" has been set, false if not
     */
    public function hasMaterial() : bool;

    /**
     * Get a default "material" value, if any is available
     *
     * @return string|null Default "material" value or null if no default value is available
     */
    public function getDefaultMaterial() : ?string;
}