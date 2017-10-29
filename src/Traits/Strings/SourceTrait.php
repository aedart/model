<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $source The source of something. E.g. location, reference, index key, or other identifier that can be used to determine the source
     *
     * @return self
     */
    public function setSource(?string $source)
    {
        $this->source = $source;

        return $this;
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
     * @return string|null source or null if no source has been set
     */
    public function getSource() : ?string 
    {
        if ( ! $this->hasSource()) {
            $this->setSource($this->getDefaultSource());
        }
        return $this->source;
    }

    /**
     * Check if "source" has been set
     *
     * @return bool True if "source" has been set, false if not
     */
    public function hasSource() : bool
    {
        return isset($this->source);
    }

    /**
     * Get a default "source" value, if any is available
     *
     * @return string|null Default "source" value or null if no default value is available
     */
    public function getDefaultSource() : ?string
    {
        return null;
    }
}