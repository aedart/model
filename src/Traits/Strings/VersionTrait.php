<?php
namespace Aedart\Model\Traits\Strings;

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
     * Set the given version
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
     * Get the given version
     *
     * If no version has been set, this method will
     * set and return a default version, if any such
     * value is available
     *
     * @see getDefaultVersion()
     *
     * @return string|null version or null if none version has been set
     */
    public function getVersion()
    {
        if (!$this->hasVersion() && $this->hasDefaultVersion()) {
            $this->setVersion($this->getDefaultVersion());
        }
        return $this->version;
    }

    /**
     * Get a default version value, if any is available
     *
     * @return string|null A default version value or Null if no default value is available
     */
    public function getDefaultVersion()
    {
        return null;
    }

    /**
     * Check if version has been set
     *
     * @return bool True if version has been set, false if not
     */
    public function hasVersion()
    {
        return !is_null($this->version);
    }

    /**
     * Check if a default version is available or not
     *
     * @return bool True of a default version is available, false if not
     */
    public function hasDefaultVersion()
    {
        return !is_null($this->getDefaultVersion());
    }
}