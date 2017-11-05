<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Format Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FormatAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FormatTrait
{
    /**
     * The shape, size and presentation or medium of an item or component
     *
     * @var string|null
     */
    protected $format = null;

    /**
     * Set format
     *
     * @param string|null $format The shape, size and presentation or medium of an item or component
     *
     * @return self
     */
    public function setFormat(?string $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * If no "format" value has been set, this method will
     * set and return a default "format" value,
     * if any such value is available
     *
     * @see getDefaultFormat()
     *
     * @return string|null format or null if no format has been set
     */
    public function getFormat() : ?string 
    {
        if ( ! $this->hasFormat()) {
            $this->setFormat($this->getDefaultFormat());
        }
        return $this->format;
    }

    /**
     * Check if "format" has been set
     *
     * @return bool True if "format" has been set, false if not
     */
    public function hasFormat() : bool
    {
        return isset($this->format);
    }

    /**
     * Get a default "format" value, if any is available
     *
     * @return string|null Default "format" value or null if no default value is available
     */
    public function getDefaultFormat() : ?string
    {
        return null;
    }
}