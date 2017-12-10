<?php

namespace Aedart\Model\Contracts\Floats;

/**
 * <h1>Size Aware</h1>
 *
 * Component is aware of a float "size" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Floats
 */
interface SizeAware
{
    /**
     * Set size
     *
     * @param float|null $size The size of something
     *
     * @return self
     */
    public function setSize(?float $size);

    /**
     * Get size
     *
     * If no "size" value has been set, this method will
     * set and return a default "size" value,
     * if any such value is available
     *
     * @see getDefaultSize()
     *
     * @return float|null size or null if no size has been set
     */
    public function getSize() : ?float ;

    /**
     * Check if "size" has been set
     *
     * @return bool True if "size" has been set, false if not
     */
    public function hasSize() : bool;

    /**
     * Get a default "size" value, if any is available
     *
     * @return float|null Default "size" value or null if no default value is available
     */
    public function getDefaultSize() : ?float;
}