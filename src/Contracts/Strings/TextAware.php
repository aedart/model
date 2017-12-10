<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Text Aware</h1>
 *
 * Component is aware of a string "text" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TextAware
{
    /**
     * Set text
     *
     * @param string|null $text The full text content for something, e.g. an article&#039;s body text
     *
     * @return self
     */
    public function setText(?string $text);

    /**
     * Get text
     *
     * If no "text" value has been set, this method will
     * set and return a default "text" value,
     * if any such value is available
     *
     * @see getDefaultText()
     *
     * @return string|null text or null if no text has been set
     */
    public function getText() : ?string ;

    /**
     * Check if "text" has been set
     *
     * @return bool True if "text" has been set, false if not
     */
    public function hasText() : bool;

    /**
     * Get a default "text" value, if any is available
     *
     * @return string|null Default "text" value or null if no default value is available
     */
    public function getDefaultText() : ?string;
}