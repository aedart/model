<?php
declare(strict_types=1);

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
     * Set version
     *
     * @param string|null $version Version
     *
     * @return self
     */
    public function setVersion(?string $version)
    {
        $this->version = $version;

        return $this;
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
     * @return string|null version or null if no version has been set
     */
    public function getVersion() : ?string 
    {
        if ( ! $this->hasVersion()) {
            $this->setVersion($this->getDefaultVersion());
        }
        return $this->version;
    }

    /**
     * Check if "version" has been set
     *
     * @return bool True if "version" has been set, false if not
     */
    public function hasVersion() : bool
    {
        return isset($this->version);
    }

    /**
     * Get a default "version" value, if any is available
     *
     * @return string|null Default "version" value or null if no default value is available
     */
    public function getDefaultVersion() : ?string
    {
        return null;
    }
}