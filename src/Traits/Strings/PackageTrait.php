<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of package. Can evt. contain path to package as well
     *
     * @var string|null
     */
    protected $package = null;

    /**
     * Set package
     *
     * @param string|null $name Name of package. Can evt. contain path to package as well
     *
     * @return self
     */
    public function setPackage(?string $name)
    {
        $this->package = $name;

        return $this;
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
     * @return string|null package or null if no package has been set
     */
    public function getPackage() : ?string 
    {
        if ( ! $this->hasPackage()) {
            $this->setPackage($this->getDefaultPackage());
        }
        return $this->package;
    }

    /**
     * Check if "package" has been set
     *
     * @return bool True if "package" has been set, false if not
     */
    public function hasPackage() : bool
    {
        return isset($this->package);
    }

    /**
     * Get a default "package" value, if any is available
     *
     * @return string|null Default "package" value or null if no default value is available
     */
    public function getDefaultPackage() : ?string
    {
        return null;
    }
}