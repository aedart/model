<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Action Aware</h1>
 *
 * Component is aware of a string "action" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ActionAware
{
    /**
     * Set action
     *
     * @param string|null $action A process or fact of doing something
     *
     * @return self
     */
    public function setAction(?string $action);

    /**
     * Get action
     *
     * If no "action" value has been set, this method will
     * set and return a default "action" value,
     * if any such value is available
     *
     * @see getDefaultAction()
     *
     * @return string|null action or null if no action has been set
     */
    public function getAction() : ?string ;

    /**
     * Check if "action" has been set
     *
     * @return bool True if "action" has been set, false if not
     */
    public function hasAction() : bool;

    /**
     * Get a default "action" value, if any is available
     *
     * @return string|null Default "action" value or null if no default value is available
     */
    public function getDefaultAction() : ?string;
}