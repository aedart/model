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
     * Set the given package
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
     * Get the given package
     *
     * If no package has been set, this method will
     * set and return a default package, if any such
     * value is available
     *
     * @see getDefaultPackage()
     *
     * @return string|null package or null if none package has been set
     */
    public function getPackage()
    {
        if (!$this->hasPackage() && $this->hasDefaultPackage()) {
            $this->setPackage($this->getDefaultPackage());
        }
        return $this->package;
    }

    /**
     * Get a default package value, if any is available
     *
     * @return string|null A default package value or Null if no default value is available
     */
    public function getDefaultPackage()
    {
        return null;
    }

    /**
     * Check if package has been set
     *
     * @return bool True if package has been set, false if not
     */
    public function hasPackage()
    {
        return !is_null($this->package);
    }

    /**
     * Check if a default package is available or not
     *
     * @return bool True of a default package is available, false if not
     */
    public function hasDefaultPackage()
    {
        return !is_null($this->getDefaultPackage());
    }
}