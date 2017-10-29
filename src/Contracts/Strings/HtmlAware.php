<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Html Aware</h1>
 *
 * Component is aware of a string "html" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface HtmlAware
{
    /**
     * Set html
     *
     * @param string|null $html HyperText Markup Language (HTML)
     *
     * @return self
     */
    public function setHtml(?string $html);

    /**
     * Get html
     *
     * If no "html" value has been set, this method will
     * set and return a default "html" value,
     * if any such value is available
     *
     * @see getDefaultHtml()
     *
     * @return string|null html or null if no html has been set
     */
    public function getHtml() : ?string ;

    /**
     * Check if "html" has been set
     *
     * @return bool True if "html" has been set, false if not
     */
    public function hasHtml() : bool;

    /**
     * Get a default "html" value, if any is available
     *
     * @return string|null Default "html" value or null if no default value is available
     */
    public function getDefaultHtml() : ?string;
}