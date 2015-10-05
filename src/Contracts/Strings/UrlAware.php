<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Url Aware</h1>
 *
 * Components implementing this interface are aware of a Uniform Resource Locator (URL),
 * which is also commonly known as a web-address.
 *
 * @see https://en.wikipedia.org/wiki/Uniform_Resource_Locator
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface UrlAware {

    /**
     * Set the given url
     *
     * @param string $webAddress Uniform Resource Locator (URL) (commonly known as a web address)
     *
     * @return void
     */
    public function setUrl($webAddress);

    /**
     * Get the given url
     *
     * If no url has been set, this method will
     * set and return a default url, if any such
     * value is available
     *
     * @see getDefaultUrl()
     *
     * @return string|null url or null if none url has been set
     */
    public function getUrl();

    /**
     * Get a default url value, if any is available
     *
     * @return string|null A default url value or Null if no default value is available
     */
    public function getDefaultUrl();

    /**
     * Check if url has been set
     *
     * @return bool True if url has been set, false if not
     */
    public function hasUrl();

    /**
     * Check if a default url is available or not
     *
     * @return bool True of a default url is available, false if not
     */
    public function hasDefaultUrl();
}