<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Isic V4 Aware</h1>
 *
 * Component is aware of a string "isic v4" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IsicV4Aware
{
    /**
     * Set isic v4
     *
     * @param string|null $code International Standard of Industrial Classification of All Economic Activities (ISIC), revision 4 code
     *
     * @return self
     */
    public function setIsicV4(?string $code);

    /**
     * Get isic v4
     *
     * If no "isic v4" value has been set, this method will
     * set and return a default "isic v4" value,
     * if any such value is available
     *
     * @see getDefaultIsicV4()
     *
     * @return string|null isic v4 or null if no isic v4 has been set
     */
    public function getIsicV4() : ?string ;

    /**
     * Check if "isic v4" has been set
     *
     * @return bool True if "isic v4" has been set, false if not
     */
    public function hasIsicV4() : bool;

    /**
     * Get a default "isic v4" value, if any is available
     *
     * @return string|null Default "isic v4" value or null if no default value is available
     */
    public function getDefaultIsicV4() : ?string;
}