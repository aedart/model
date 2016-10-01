<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Prefix Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PrefixAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PrefixTrait
{
    /**
     * Affix that is placed before something
     *
     * @var string|null
     */
    protected $prefix = null;

    /**
     * Set prefix
     *
     * @param string $affix Affix that is placed before something
     *
     * @return void
     */
    public function setPrefix($affix)
    {
        $this->prefix = (string) $affix;
    }

    /**
     * Get prefix
     *
     * If no "prefix" value has been set, this method will
     * set and return a default "prefix" value,
     * if any such value is available
     *
     * @see getDefaultPrefix()
     *
     * @return string|null "prefix" value or null if no "prefix" value has been set
     */
    public function getPrefix()
    {
        if (!$this->hasPrefix() && $this->hasDefaultPrefix()) {
            $this->setPrefix($this->getDefaultPrefix());
        }
        return $this->prefix;
    }

    /**
     * Get a default "prefix" value, if any is available
     *
     * @return string|null A default "prefix" value or null if no default value is available
     */
    public function getDefaultPrefix()
    {
        return null;
    }

    /**
     * Check if "prefix" has been set
     *
     * @return bool True if "prefix" value has been set, false if not
     */
    public function hasPrefix()
    {
        return isset($this->prefix);
    }

    /**
     * Check if a default "prefix" is available or not
     *
     * @return bool True of a default "prefix" value is available, false if not
     */
    public function hasDefaultPrefix()
    {
        $default = $this->getDefaultPrefix();
        return isset($default);
    }
}