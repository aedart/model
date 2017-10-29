<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $location Path, Uri or other type of location to a logo
     *
     * @return self
     */
    public function setLogo(?string $location)
    {
        $this->logo = $location;

        return $this;
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
     * @return string|null logo or null if no logo has been set
     */
    public function getLogo() : ?string 
    {
        if ( ! $this->hasLogo()) {
            $this->setLogo($this->getDefaultLogo());
        }
        return $this->logo;
    }

    /**
     * Check if "logo" has been set
     *
     * @return bool True if "logo" has been set, false if not
     */
    public function hasLogo() : bool
    {
        return isset($this->logo);
    }

    /**
     * Get a default "logo" value, if any is available
     *
     * @return string|null Default "logo" value or null if no default value is available
     */
    public function getDefaultLogo() : ?string
    {
        return null;
    }
}