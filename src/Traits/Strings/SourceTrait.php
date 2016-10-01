<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Source Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SourceAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SourceTrait
{
    /**
     * The source of something. E.g. location, reference, index key, or other identifier that can be used to determine the source
     *
     * @var string|null
     */
    protected $source = null;

    /**
     * Set source
     *
     * @param string $source The source of something. E.g. location, reference, index key, or other identifier that can be used to determine the source
     *
     * @return void
     */
    public function setSource($source)
    {
        $this->source = (string) $source;
    }

    /**
     * Get source
     *
     * If no "source" value has been set, this method will
     * set and return a default "source" value,
     * if any such value is available
     *
     * @see getDefaultSource()
     *
     * @return string|null "source" value or null if no "source" value has been set
     */
    public function getSource()
    {
        if (!$this->hasSource() && $this->hasDefaultSource()) {
            $this->setSource($this->getDefaultSource());
        }
        return $this->source;
    }

    /**
     * Get a default "source" value, if any is available
     *
     * @return string|null A default "source" value or null if no default value is available
     */
    public function getDefaultSource()
    {
        return null;
    }

    /**
     * Check if "source" has been set
     *
     * @return bool True if "source" value has been set, false if not
     */
    public function hasSource()
    {
        return isset($this->source);
    }

    /**
     * Check if a default "source" is available or not
     *
     * @return bool True of a default "source" value is available, false if not
     */
    public function hasDefaultSource()
    {
        $default = $this->getDefaultSource();
        return isset($default);
    }
}