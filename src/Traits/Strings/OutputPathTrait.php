<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Output Path Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\OutputPathAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait OutputPathTrait
{
    /**
     * Location of where some kind of output must be placed or written to
     *
     * @var string|null
     */
    protected $outputPath = null;

    /**
     * Set output path
     *
     * @param string|null $path Location of where some kind of output must be placed or written to
     *
     * @return self
     */
    public function setOutputPath(?string $path)
    {
        $this->outputPath = $path;

        return $this;
    }

    /**
     * Get output path
     *
     * If no "output path" value has been set, this method will
     * set and return a default "output path" value,
     * if any such value is available
     *
     * @see getDefaultOutputPath()
     *
     * @return string|null output path or null if no output path has been set
     */
    public function getOutputPath() : ?string 
    {
        if ( ! $this->hasOutputPath()) {
            $this->setOutputPath($this->getDefaultOutputPath());
        }
        return $this->outputPath;
    }

    /**
     * Check if "output path" has been set
     *
     * @return bool True if "output path" has been set, false if not
     */
    public function hasOutputPath() : bool
    {
        return isset($this->outputPath);
    }

    /**
     * Get a default "output path" value, if any is available
     *
     * @return string|null Default "output path" value or null if no default value is available
     */
    public function getDefaultOutputPath() : ?string
    {
        return null;
    }
}