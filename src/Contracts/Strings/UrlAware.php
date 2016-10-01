<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $webAddress Uniform Resource Locator (Url) (commenly known as a web address)
     *
     * @return void
     */
    public function setUrl($webAddress);

    /**
     * Get url
     *
     * If no "url" value has been set, this method will
     * set and return a default "url" value,
     * if any such value is available
     *
     * @see getDefaultUrl()
     *
     * @return string|null "url" value or null if no "url" value has been set
     */
    public function getUrl();

    /**
     * Get a default "url" value, if any is available
     *
     * @return string|null A default "url" value or null if no default value is available
     */
    public function getDefaultUrl();

    /**
     * Check if "url" has been set
     *
     * @return bool True if "url" value has been set, false if not
     */
    public function hasUrl();

    /**
     * Check if a default "url" is available or not
     *
     * @return bool True of a default "url" value is available, false if not
     */
    public function hasDefaultUrl();
}