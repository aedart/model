<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Size Aware</h1>
 *
 * Component is aware of a string "size" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SizeAware
{
    /**
     * Set size
     *
     * @param string|null $size The size of something
     *
     * @return self
     */
    public function setSize(?string $size);

    /**
     * Get size
     *
     * If no "size" value has been set, this method will
     * set and return a default "size" value,
     * if any such value is available
     *
     * @see getDefaultSize()
     *
     * @return string|null size or null if no size has been set
     */
    public function getSize() : ?string ;

    /**
     * Check if "size" has been set
     *
     * @return bool True if "size" has been set, false if not
     */
    public function hasSize() : bool;

    /**
     * Get a default "size" value, if any is available
     *
     * @return string|null Default "size" value or null if no default value is available
     */
    public function getDefaultSize() : ?string;
}