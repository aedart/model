<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Base Path Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\BasePathAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait BasePathTrait
{
    /**
     * The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc
     *
     * @var string|null
     */
    protected $basePath = null;

    /**
     * Set base path
     *
     * @param string $path The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc
     *
     * @return void
     */
    public function setBasePath($path)
    {
        $this->basePath = (string) $path;
    }

    /**
     * Get base path
     *
     * If no "base path" value has been set, this method will
     * set and return a default "base path" value,
     * if any such value is available
     *
     * @see getDefaultBasePath()
     *
     * @return string|null "base path" value or null if no "base path" value has been set
     */
    public function getBasePath()
    {
        if (!$this->hasBasePath() && $this->hasDefaultBasePath()) {
            $this->setBasePath($this->getDefaultBasePath());
        }
        return $this->basePath;
    }

    /**
     * Get a default "base path" value, if any is available
     *
     * @return string|null A default "base path" value or null if no default value is available
     */
    public function getDefaultBasePath()
    {
        return null;
    }

    /**
     * Check if "base path" has been set
     *
     * @return bool True if "base path" value has been set, false if not
     */
    public function hasBasePath()
    {
        return isset($this->basePath);
    }

    /**
     * Check if a default "base path" is available or not
     *
     * @return bool True of a default "base path" value is available, false if not
     */
    public function hasDefaultBasePath()
    {
        $default = $this->getDefaultBasePath();
        return isset($default);
    }
}