<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Version Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\VersionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait VersionTrait
{
    /**
     * Version
     *
     * @var string|null
     */
    protected $version = null;

    /**
     * Set version
     *
     * @param string $version Version
     *
     * @return void
     */
    public function setVersion($version)
    {
        $this->version = (string) $version;
    }

    /**
     * Get version
     *
     * If no "version" value has been set, this method will
     * set and return a default "version" value,
     * if any such value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null "version" value or null if no "version" value has been set
     */
    public function getVersion()
    {
        if (!$this->hasVersion() && $this->hasDefaultVersion()) {
            $this->setVersion($this->getDefaultVersion());
        }
        return $this->version;
    }

    /**
     * Get a default "version" value, if any is available
     *
     * @return string|null A default "version" value or null if no default value is available
     */
    public function getDefaultVersion()
    {
        return null;
    }

    /**
     * Check if "version" has been set
     *
     * @return bool True if "version" value has been set, false if not
     */
    public function hasVersion()
    {
        return isset($this->version);
    }

    /**
     * Check if a default "version" is available or not
     *
     * @return bool True of a default "version" value is available, false if not
     */
    public function hasDefaultVersion()
    {
        $default = $this->getDefaultVersion();
        return isset($default);
    }
}