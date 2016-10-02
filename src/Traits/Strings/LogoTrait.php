<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Logo Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LogoAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LogoTrait
{
    /**
     * Path, Uri or other type of location to a logo
     *
     * @var string|null
     */
    protected $logo = null;

    /**
     * Set logo
     *
     * @param string $location Path, Uri or other type of location to a logo
     *
     * @return void
     */
    public function setLogo($location)
    {
        $this->logo = (string) $location;
    }

    /**
     * Get logo
     *
     * If no "logo" value has been set, this method will
     * set and return a default "logo" value,
     * if any such value is available
     *
     * @see getDefaultLogo()
     *
     * @return string|null "logo" value or null if no "logo" value has been set
     */
    public function getLogo()
    {
        if (!$this->hasLogo() && $this->hasDefaultLogo()) {
            $this->setLogo($this->getDefaultLogo());
        }
        return $this->logo;
    }

    /**
     * Get a default "logo" value, if any is available
     *
     * @return string|null A default "logo" value or null if no default value is available
     */
    public function getDefaultLogo()
    {
        return null;
    }

    /**
     * Check if "logo" has been set
     *
     * @return bool True if "logo" value has been set, false if not
     */
    public function hasLogo()
    {
        return isset($this->logo);
    }

    /**
     * Check if a default "logo" is available or not
     *
     * @return bool True of a default "logo" value is available, false if not
     */
    public function hasDefaultLogo()
    {
        $default = $this->getDefaultLogo();
        return isset($default);
    }
}