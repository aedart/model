<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $xml Extensible Markup Language (XML)
     *
     * @return void
     */
    public function setXml($xml)
    {
        $this->xml = (string) $xml;
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
     * @return string|null "xml" value or null if no "xml" value has been set
     */
    public function getXml()
    {
        if (!$this->hasXml() && $this->hasDefaultXml()) {
            $this->setXml($this->getDefaultXml());
        }
        return $this->xml;
    }

    /**
     * Get a default "xml" value, if any is available
     *
     * @return string|null A default "xml" value or null if no default value is available
     */
    public function getDefaultXml()
    {
        return null;
    }

    /**
     * Check if "xml" has been set
     *
     * @return bool True if "xml" value has been set, false if not
     */
    public function hasXml()
    {
        return isset($this->xml);
    }

    /**
     * Check if a default "xml" is available or not
     *
     * @return bool True of a default "xml" value is available, false if not
     */
    public function hasDefaultXml()
    {
        $default = $this->getDefaultXml();
        return isset($default);
    }
}