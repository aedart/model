<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Url Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\UrlAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait UrlTrait
{
    /**
     * Uniform Resource Locator (Url) (commenly known as a web address)
     *
     * @var string|null
     */
    protected $url = null;

    /**
     * Set url
     *
     * @param string $webAddress Uniform Resource Locator (Url) (commenly known as a web address)
     *
     * @return void
     */
    public function setUrl($webAddress)
    {
        $this->url = (string) $webAddress;
    }

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
    public function getUrl()
    {
        if (!$this->hasUrl() && $this->hasDefaultUrl()) {
            $this->setUrl($this->getDefaultUrl());
        }
        return $this->url;
    }

    /**
     * Get a default "url" value, if any is available
     *
     * @return string|null A default "url" value or null if no default value is available
     */
    public function getDefaultUrl()
    {
        return null;
    }

    /**
     * Check if "url" has been set
     *
     * @return bool True if "url" value has been set, false if not
     */
    public function hasUrl()
    {
        return isset($this->url);
    }

    /**
     * Check if a default "url" is available or not
     *
     * @return bool True of a default "url" value is available, false if not
     */
    public function hasDefaultUrl()
    {
        $default = $this->getDefaultUrl();
        return isset($default);
    }
}