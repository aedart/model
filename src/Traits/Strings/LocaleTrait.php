<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Locale Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LocaleAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LocaleTrait
{
    /**
     * Locale language code, e.g. en_us or other format
     *
     * @var string|null
     */
    protected $locale = null;

    /**
     * Set locale
     *
     * @param string|null $code Locale language code, e.g. en_us or other format
     *
     * @return self
     */
    public function setLocale(?string $code)
    {
        $this->locale = $code;

        return $this;
    }

    /**
     * Get locale
     *
     * If no "locale" value has been set, this method will
     * set and return a default "locale" value,
     * if any such value is available
     *
     * @see getDefaultLocale()
     *
     * @return string|null locale or null if no locale has been set
     */
    public function getLocale() : ?string 
    {
        if ( ! $this->hasLocale()) {
            $this->setLocale($this->getDefaultLocale());
        }
        return $this->locale;
    }

    /**
     * Check if "locale" has been set
     *
     * @return bool True if "locale" has been set, false if not
     */
    public function hasLocale() : bool
    {
        return isset($this->locale);
    }

    /**
     * Get a default "locale" value, if any is available
     *
     * @return string|null Default "locale" value or null if no default value is available
     */
    public function getDefaultLocale() : ?string
    {
        return null;
    }
}