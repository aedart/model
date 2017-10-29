<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Xml Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\XmlAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait XmlTrait
{
    /**
     * Extensible Markup Language (XML)
     *
     * @var string|null
     */
    protected $xml = null;

    /**
     * Set xml
     *
     * @param string|null $xml Extensible Markup Language (XML)
     *
     * @return self
     */
    public function setXml(?string $xml)
    {
        $this->xml = $xml;

        return $this;
    }

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
    public function getXml() : ?string 
    {
        if ( ! $this->hasXml()) {
            $this->setXml($this->getDefaultXml());
        }
        return $this->xml;
    }

    /**
     * Check if "xml" has been set
     *
     * @return bool True if "xml" has been set, false if not
     */
    public function hasXml() : bool
    {
        return isset($this->xml);
    }

    /**
     * Get a default "xml" value, if any is available
     *
     * @return string|null Default "xml" value or null if no default value is available
     */
    public function getDefaultXml() : ?string
    {
        return null;
    }
}