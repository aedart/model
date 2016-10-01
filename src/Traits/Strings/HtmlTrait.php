<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $html HyperText Markup Language (HTML)
     *
     * @return void
     */
    public function setHtml($html)
    {
        $this->html = (string) $html;
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
     * @return string|null "html" value or null if no "html" value has been set
     */
    public function getHtml()
    {
        if (!$this->hasHtml() && $this->hasDefaultHtml()) {
            $this->setHtml($this->getDefaultHtml());
        }
        return $this->html;
    }

    /**
     * Get a default "html" value, if any is available
     *
     * @return string|null A default "html" value or null if no default value is available
     */
    public function getDefaultHtml()
    {
        return null;
    }

    /**
     * Check if "html" has been set
     *
     * @return bool True if "html" value has been set, false if not
     */
    public function hasHtml()
    {
        return isset($this->html);
    }

    /**
     * Check if a default "html" is available or not
     *
     * @return bool True of a default "html" value is available, false if not
     */
    public function hasDefaultHtml()
    {
        $default = $this->getDefaultHtml();
        return isset($default);
    }
}