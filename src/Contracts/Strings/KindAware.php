<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $kind The kind of object this represents, e.g. human, organisation, group, individual...etc
     *
     * @return void
     */
    public function setKind($kind);

    /**
     * Get kind
     *
     * If no "kind" value has been set, this method will
     * set and return a default "kind" value,
     * if any such value is available
     *
     * @see getDefaultKind()
     *
     * @return string|null "kind" value or null if no "kind" value has been set
     */
    public function getKind();

    /**
     * Get a default "kind" value, if any is available
     *
     * @return string|null A default "kind" value or null if no default value is available
     */
    public function getDefaultKind();

    /**
     * Check if "kind" has been set
     *
     * @return bool True if "kind" value has been set, false if not
     */
    public function hasKind();

    /**
     * Check if a default "kind" is available or not
     *
     * @return bool True of a default "kind" value is available, false if not
     */
    public function hasDefaultKind();
}