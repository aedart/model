<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Profile Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ProfileAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ProfileTrait
{
    /**
     * The profile or someone or something
     *
     * @var string|null
     */
    protected $profile = null;

    /**
     * Set profile
     *
     * @param string|null $profile The profile or someone or something
     *
     * @return self
     */
    public function setProfile(?string $profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * If no "profile" value has been set, this method will
     * set and return a default "profile" value,
     * if any such value is available
     *
     * @see getDefaultProfile()
     *
     * @return string|null profile or null if no profile has been set
     */
    public function getProfile() : ?string 
    {
        if ( ! $this->hasProfile()) {
            $this->setProfile($this->getDefaultProfile());
        }
        return $this->profile;
    }

    /**
     * Check if "profile" has been set
     *
     * @return bool True if "profile" has been set, false if not
     */
    public function hasProfile() : bool
    {
        return isset($this->profile);
    }

    /**
     * Get a default "profile" value, if any is available
     *
     * @return string|null Default "profile" value or null if no default value is available
     */
    public function getDefaultProfile() : ?string
    {
        return null;
    }
}