<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Message Aware</h1>
 *
 * Component is aware of a string "message" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface MessageAware
{
    /**
     * Set message
     *
     * @param string|null $message A message
     *
     * @return self
     */
    public function setMessage(?string $message);

    /**
     * Get message
     *
     * If no "message" value has been set, this method will
     * set and return a default "message" value,
     * if any such value is available
     *
     * @see getDefaultMessage()
     *
     * @return string|null message or null if no message has been set
     */
    public function getMessage() : ?string ;

    /**
     * Check if "message" has been set
     *
     * @return bool True if "message" has been set, false if not
     */
    public function hasMessage() : bool;

    /**
     * Get a default "message" value, if any is available
     *
     * @return string|null Default "message" value or null if no default value is available
     */
    public function getDefaultMessage() : ?string;
}