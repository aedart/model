<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $xml Extensible Markup Language (XML)
     *
     * @return self
     */
    public function setXml(?string $xml);

    /**
     * Get xml
     *
     * If no "xml" value has been set, this method will
     * set and return a default "xml" value,
     * if any such value is available
     *
     * @see getDefaultXml()
     *
     * @return string|null xml or null if no xml has been set
     */
    public function getXml() : ?string ;

    /**
     * Check if "xml" has been set
     *
     * @return bool True if "xml" has been set, false if not
     */
    public function hasXml() : bool;

    /**
     * Get a default "xml" value, if any is available
     *
     * @return string|null Default "xml" value or null if no default value is available
     */
    public function getDefaultXml() : ?string;
}