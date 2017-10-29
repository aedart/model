<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Html Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\HtmlAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait HtmlTrait
{
    /**
     * HyperText Markup Language (HTML)
     *
     * @var string|null
     */
    protected $html = null;

    /**
     * Set html
     *
     * @param string|null $html HyperText Markup Language (HTML)
     *
     * @return self
     */
    public function setHtml(?string $html)
    {
        $this->html = $html;

        return $this;
    }

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
    public function getHtml() : ?string 
    {
        if ( ! $this->hasHtml()) {
            $this->setHtml($this->getDefaultHtml());
        }
        return $this->html;
    }

    /**
     * Check if "html" has been set
     *
     * @return bool True if "html" has been set, false if not
     */
    public function hasHtml() : bool
    {
        return isset($this->html);
    }

    /**
     * Get a default "html" value, if any is available
     *
     * @return string|null Default "html" value or null if no default value is available
     */
    public function getDefaultHtml() : ?string
    {
        return null;
    }
}