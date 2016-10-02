<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a colour or colour value, e.g. rgb, cmyk, hsl or other format
     *
     * @var string|null
     */
    protected $colour = null;

    /**
     * Set colour
     *
     * @param string $value Name of a colour or colour value, e.g. rgb, cmyk, hsl or other format
     *
     * @return void
     */
    public function setColour($value)
    {
        $this->colour = (string) $value;
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
     * @return string|null "colour" value or null if no "colour" value has been set
     */
    public function getColour()
    {
        if (!$this->hasColour() && $this->hasDefaultColour()) {
            $this->setColour($this->getDefaultColour());
        }
        return $this->colour;
    }

    /**
     * Get a default "colour" value, if any is available
     *
     * @return string|null A default "colour" value or null if no default value is available
     */
    public function getDefaultColour()
    {
        return null;
    }

    /**
     * Check if "colour" has been set
     *
     * @return bool True if "colour" value has been set, false if not
     */
    public function hasColour()
    {
        return isset($this->colour);
    }

    /**
     * Check if a default "colour" is available or not
     *
     * @return bool True of a default "colour" value is available, false if not
     */
    public function hasDefaultColour()
    {
        $default = $this->getDefaultColour();
        return isset($default);
    }
}