<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Package Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PackageAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PackageTrait
{
    /**
     * Name of a package
     *
     * @var string|null
     */
    protected $package = null;

    /**
     * Set package
     *
     * @param string $name Name of a package
     *
     * @return void
     */
    public function setPackage($name)
    {
        $this->package = (string) $name;
    }

    /**
     * Get package
     *
     * If no "package" value has been set, this method will
     * set and return a default "package" value,
     * if any such value is available
     *
     * @see getDefaultPackage()
     *
     * @return string|null "package" value or null if no "package" value has been set
     */
    public function getPackage()
    {
        if (!$this->hasPackage() && $this->hasDefaultPackage()) {
            $this->setPackage($this->getDefaultPackage());
        }
        return $this->package;
    }

    /**
     * Get a default "package" value, if any is available
     *
     * @return string|null A default "package" value or null if no default value is available
     */
    public function getDefaultPackage()
    {
        return null;
    }

    /**
     * Check if "package" has been set
     *
     * @return bool True if "package" value has been set, false if not
     */
    public function hasPackage()
    {
        return isset($this->package);
    }

    /**
     * Check if a default "package" is available or not
     *
     * @return bool True of a default "package" value is available, false if not
     */
    public function hasDefaultPackage()
    {
        $default = $this->getDefaultPackage();
        return isset($default);
    }
}