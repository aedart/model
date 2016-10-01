<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Suffix Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SuffixAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SuffixTrait
{
    /**
     * Affix that is placed after something
     *
     * @var string|null
     */
    protected $suffix = null;

    /**
     * Set suffix
     *
     * @param string $affix Affix that is placed after something
     *
     * @return void
     */
    public function setSuffix($affix)
    {
        $this->suffix = (string) $affix;
    }

    /**
     * Get suffix
     *
     * If no "suffix" value has been set, this method will
     * set and return a default "suffix" value,
     * if any such value is available
     *
     * @see getDefaultSuffix()
     *
     * @return string|null "suffix" value or null if no "suffix" value has been set
     */
    public function getSuffix()
    {
        if (!$this->hasSuffix() && $this->hasDefaultSuffix()) {
            $this->setSuffix($this->getDefaultSuffix());
        }
        return $this->suffix;
    }

    /**
     * Get a default "suffix" value, if any is available
     *
     * @return string|null A default "suffix" value or null if no default value is available
     */
    public function getDefaultSuffix()
    {
        return null;
    }

    /**
     * Check if "suffix" has been set
     *
     * @return bool True if "suffix" value has been set, false if not
     */
    public function hasSuffix()
    {
        return isset($this->suffix);
    }

    /**
     * Check if a default "suffix" is available or not
     *
     * @return bool True of a default "suffix" value is available, false if not
     */
    public function hasDefaultSuffix()
    {
        $default = $this->getDefaultSuffix();
        return isset($default);
    }
}