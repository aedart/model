<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Filename Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\FilenameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait FilenameTrait
{
    /**
     * Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @var string|null
     */
    protected $filename = null;

    /**
     * Set filename
     *
     * @param string $name Name of a given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return void
     */
    public function setFilename($name)
    {
        $this->filename = (string) $name;
    }

    /**
     * Get filename
     *
     * If no "filename" value has been set, this method will
     * set and return a default "filename" value,
     * if any such value is available
     *
     * @see getDefaultFilename()
     *
     * @return string|null "filename" value or null if no "filename" value has been set
     */
    public function getFilename()
    {
        if (!$this->hasFilename() && $this->hasDefaultFilename()) {
            $this->setFilename($this->getDefaultFilename());
        }
        return $this->filename;
    }

    /**
     * Get a default "filename" value, if any is available
     *
     * @return string|null A default "filename" value or null if no default value is available
     */
    public function getDefaultFilename()
    {
        return null;
    }

    /**
     * Check if "filename" has been set
     *
     * @return bool True if "filename" value has been set, false if not
     */
    public function hasFilename()
    {
        return isset($this->filename);
    }

    /**
     * Check if a default "filename" is available or not
     *
     * @return bool True of a default "filename" value is available, false if not
     */
    public function hasDefaultFilename()
    {
        $default = $this->getDefaultFilename();
        return isset($default);
    }
}