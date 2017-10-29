<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Colour Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ColourAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ColourTrait
{
    /**
     * Name of colour or colour value, e.g. RGB, CMYK, HSL or other format
     *
     * @var string|null
     */
    protected $colour = null;

    /**
     * Set colour
     *
     * @param string|null $colour Name of colour or colour value, e.g. RGB, CMYK, HSL or other format
     *
     * @return self
     */
    public function setColour(?string $colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get colour
     *
     * If no "colour" value has been set, this method will
     * set and return a default "colour" value,
     * if any such value is available
     *
     * @see getDefaultColour()
     *
     * @return string|null colour or null if no colour has been set
     */
    public function getColour() : ?string 
    {
        if ( ! $this->hasColour()) {
            $this->setColour($this->getDefaultColour());
        }
        return $this->colour;
    }

    /**
     * Check if "colour" has been set
     *
     * @return bool True if "colour" has been set, false if not
     */
    public function hasColour() : bool
    {
        return isset($this->colour);
    }

    /**
     * Get a default "colour" value, if any is available
     *
     * @return string|null Default "colour" value or null if no default value is available
     */
    public function getDefaultColour() : ?string
    {
        return null;
    }
}