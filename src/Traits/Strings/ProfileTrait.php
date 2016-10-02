<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $value The profile or someone or something
     *
     * @return void
     */
    public function setProfile($value)
    {
        $this->profile = (string) $value;
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
     * @return string|null "profile" value or null if no "profile" value has been set
     */
    public function getProfile()
    {
        if (!$this->hasProfile() && $this->hasDefaultProfile()) {
            $this->setProfile($this->getDefaultProfile());
        }
        return $this->profile;
    }

    /**
     * Get a default "profile" value, if any is available
     *
     * @return string|null A default "profile" value or null if no default value is available
     */
    public function getDefaultProfile()
    {
        return null;
    }

    /**
     * Check if "profile" has been set
     *
     * @return bool True if "profile" value has been set, false if not
     */
    public function hasProfile()
    {
        return isset($this->profile);
    }

    /**
     * Check if a default "profile" is available or not
     *
     * @return bool True of a default "profile" value is available, false if not
     */
    public function hasDefaultProfile()
    {
        $default = $this->getDefaultProfile();
        return isset($default);
    }
}