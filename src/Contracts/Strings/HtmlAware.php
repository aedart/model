<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $html HyperText Markup Language (HTML)
     *
     * @return void
     */
    public function setHtml($html);

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
    public function getHtml();

    /**
     * Get a default "html" value, if any is available
     *
     * @return string|null A default "html" value or null if no default value is available
     */
    public function getDefaultHtml();

    /**
     * Check if "html" has been set
     *
     * @return bool True if "html" value has been set, false if not
     */
    public function hasHtml();

    /**
     * Check if a default "html" is available or not
     *
     * @return bool True of a default "html" value is available, false if not
     */
    public function hasDefaultHtml();
}