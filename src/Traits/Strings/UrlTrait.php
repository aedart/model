<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Uniform Resource Locator (Url), commonly known as a web address
     *
     * @var string|null
     */
    protected $url = null;

    /**
     * Set url
     *
     * @param string|null $webAddress Uniform Resource Locator (Url), commonly known as a web address
     *
     * @return self
     */
    public function setUrl(?string $webAddress)
    {
        $this->url = $webAddress;

        return $this;
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
     * @return string|null url or null if no url has been set
     */
    public function getUrl() : ?string 
    {
        if ( ! $this->hasUrl()) {
            $this->setUrl($this->getDefaultUrl());
        }
        return $this->url;
    }

    /**
     * Check if "url" has been set
     *
     * @return bool True if "url" has been set, false if not
     */
    public function hasUrl() : bool
    {
        return isset($this->url);
    }

    /**
     * Get a default "url" value, if any is available
     *
     * @return string|null Default "url" value or null if no default value is available
     */
    public function getDefaultUrl() : ?string
    {
        return null;
    }
}