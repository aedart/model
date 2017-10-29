<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $path The path to the root directory of some kind of a resource, e.g. your application, files, pictures,...etc
     *
     * @return self
     */
    public function setBasePath(?string $path)
    {
        $this->basePath = $path;

        return $this;
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
     * @return string|null base path or null if no base path has been set
     */
    public function getBasePath() : ?string 
    {
        if ( ! $this->hasBasePath()) {
            $this->setBasePath($this->getDefaultBasePath());
        }
        return $this->basePath;
    }

    /**
     * Check if "base path" has been set
     *
     * @return bool True if "base path" has been set, false if not
     */
    public function hasBasePath() : bool
    {
        return isset($this->basePath);
    }

    /**
     * Get a default "base path" value, if any is available
     *
     * @return string|null Default "base path" value or null if no default value is available
     */
    public function getDefaultBasePath() : ?string
    {
        return null;
    }
}