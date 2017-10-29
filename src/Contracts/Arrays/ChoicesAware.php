<?php

namespace Aedart\Model\Contracts\Arrays;

/**
 * <h1>Choices Aware</h1>
 *
 * Component is aware of a array "choices" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Arrays
 */
interface ChoicesAware
{
    /**
     * Set choices
     *
     * @param array|null $list Various choices that can be made
     *
     * @return self
     */
    public function setChoices(?array $list);

    /**
     * Get choices
     *
     * If no "choices" value has been set, this method will
     * set and return a default "choices" value,
     * if any such value is available
     *
     * @see getDefaultChoices()
     *
     * @return array|null choices or null if no choices has been set
     */
    public function getChoices() : ?array ;

    /**
     * Check if "choices" has been set
     *
     * @return bool True if "choices" has been set, false if not
     */
    public function hasChoices() : bool;

    /**
     * Get a default "choices" value, if any is available
     *
     * @return array|null Default "choices" value or null if no default value is available
     */
    public function getDefaultChoices() : ?array;
}