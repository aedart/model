<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Xml Aware</h1>
 *
 * Component is aware of a string "xml" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface XmlAware
{
    /**
     * Set xml
     *
     * @param string $xml Extensible Markup Language (XML)
     *
     * @return void
     */
    public function setXml($xml);

    /**
     * Get xml
     *
     * If no "xml" value has been set, this method will
     * set and return a default "xml" value,
     * if any such value is available
     *
     * @see getDefaultXml()
     *
     * @return string|null "xml" value or null if no "xml" value has been set
     */
    public function getXml();

    /**
     * Get a default "xml" value, if any is available
     *
     * @return string|null A default "xml" value or null if no default value is available
     */
    public function getDefaultXml();

    /**
     * Check if "xml" has been set
     *
     * @return bool True if "xml" value has been set, false if not
     */
    public function hasXml();

    /**
     * Check if a default "xml" is available or not
     *
     * @return bool True of a default "xml" value is available, false if not
     */
    public function hasDefaultXml();
}