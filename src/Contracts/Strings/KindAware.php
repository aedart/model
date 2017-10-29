<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Kind Aware</h1>
 *
 * Component is aware of a string "kind" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface KindAware
{
    /**
     * Set kind
     *
     * @param string|null $kind The kind of object this represents, e.g. human, organisation, group, individual...etc
     *
     * @return self
     */
    public function setKind(?string $kind);

    /**
     * Get kind
     *
     * If no "kind" value has been set, this method will
     * set and return a default "kind" value,
     * if any such value is available
     *
     * @see getDefaultKind()
     *
     * @return string|null kind or null if no kind has been set
     */
    public function getKind() : ?string ;

    /**
     * Check if "kind" has been set
     *
     * @return bool True if "kind" has been set, false if not
     */
    public function hasKind() : bool;

    /**
     * Get a default "kind" value, if any is available
     *
     * @return string|null Default "kind" value or null if no default value is available
     */
    public function getDefaultKind() : ?string;
}