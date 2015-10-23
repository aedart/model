<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Output Path Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\OutputPathAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait OutputPathTrait {

    /**
     * Output path - The location of where some kind of output must placed or written to
     *
     * @var string|null
     */
    protected $outputPath = null;

    /**
     * Set the given output path
     *
     * @param string $path Output path - The location of where some kind of output must placed or written to
     *
     * @return void
     */
    public function setOutputPath($path) {
        $this->outputPath = (string) $path;
    }

    /**
     * Get the given output path
     *
     * If no output path has been set, this method will
     * set and return a default output path, if any such
     * value is available
     *
     * @see getDefaultOutputPath()
     *
     * @return string|null output path or null if none output path has been set
     */
    public function getOutputPath() {
        if (!$this->hasOutputPath() && $this->hasDefaultOutputPath()) {
            $this->setOutputPath($this->getDefaultOutputPath());
        }
        return $this->outputPath;
    }

    /**
     * Get a default output path value, if any is available
     *
     * @return string|null A default output path value or Null if no default value is available
     */
    public function getDefaultOutputPath() {
        return null;
    }

    /**
     * Check if output path has been set
     *
     * @return bool True if output path has been set, false if not
     */
    public function hasOutputPath() {
        return !is_null($this->outputPath);
    }

    /**
     * Check if a default output path is available or not
     *
     * @return bool True of a default output path is available, false if not
     */
    public function hasDefaultOutputPath() {
        return !is_null($this->getDefaultOutputPath());
    }
}