<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Url Aware</h1>
 *
 * Component is aware of a string "url" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface UrlAware
{
    /**
     * Set url
     *
     * @param string|null $webAddress Uniform Resource Locator (Url), commonly known as a web address
     *
     * @return self
     */
    public function setUrl(?string $webAddress);

    /**
     * Get url
     *
     * If no "url" value has been set, this method will
     * set and return a default "url" value,
     * if any such value is available
     *
     * @see getDefaultUrl()
     *
     * @return string|null url or null if no url has been set
     */
    public function getUrl() : ?string ;

    /**
     * Check if "url" has been set
     *
     * @return bool True if "url" has been set, false if not
     */
    public function hasUrl() : bool;

    /**
     * Get a default "url" value, if any is available
     *
     * @return string|null Default "url" value or null if no default value is available
     */
    public function getDefaultUrl() : ?string;
}