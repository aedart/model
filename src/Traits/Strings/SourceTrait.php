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
     * The source of something. This can be a location,
     * a reference or index key, or other identifier which
     * can be used to determine the source.
     *
     * @var string|null
     */
    protected $source = null;

    /**
     * Set the given source
     *
     * @param string $source The source of something. This can be a location,
     * a reference or index key, or other identifier which
     * can be used to determine the source.
     *
     * @return void
     */
    public function setSource($source)
    {
        $this->source = (string) $source;
    }

    /**
     * Get the given source
     *
     * If no source has been set, this method will
     * set and return a default source, if any such
     * value is available
     *
     * @see getDefaultSource()
     *
     * @return string|null source or null if none source has been set
     */
    public function getSource()
    {
        if (!$this->hasSource() && $this->hasDefaultSource()) {
            $this->setSource($this->getDefaultSource());
        }
        return $this->source;
    }

    /**
     * Get a default source value, if any is available
     *
     * @return string|null A default source value or Null if no default value is available
     */
    public function getDefaultSource()
    {
        return null;
    }

    /**
     * Check if source has been set
     *
     * @return bool True if source has been set, false if not
     */
    public function hasSource()
    {
        return !is_null($this->source);
    }

    /**
     * Check if a default source is available or not
     *
     * @return bool True of a default source is available, false if not
     */
    public function hasDefaultSource()
    {
        return !is_null($this->getDefaultSource());
    }
}