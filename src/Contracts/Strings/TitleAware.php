<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Title Aware</h1>
 *
 * Component is aware of a string "title" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface TitleAware
{
    /**
     * Set title
     *
     * @param string|null $title Title
     *
     * @return self
     */
    public function setTitle(?string $title);

    /**
     * Get title
     *
     * If no "title" value has been set, this method will
     * set and return a default "title" value,
     * if any such value is available
     *
     * @see getDefaultTitle()
     *
     * @return string|null title or null if no title has been set
     */
    public function getTitle() : ?string ;

    /**
     * Check if "title" has been set
     *
     * @return bool True if "title" has been set, false if not
     */
    public function hasTitle() : bool;

    /**
     * Get a default "title" value, if any is available
     *
     * @return string|null Default "title" value or null if no default value is available
     */
    public function getDefaultTitle() : ?string;
}