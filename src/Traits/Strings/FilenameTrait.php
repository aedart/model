<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @var string|null
     */
    protected $filename = null;

    /**
     * Set filename
     *
     * @param string|null $name Name of given file, with or without path, e.g. myText.txt, /usr/docs/README.md
     *
     * @return self
     */
    public function setFilename(?string $name)
    {
        $this->filename = $name;

        return $this;
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
     * @return string|null filename or null if no filename has been set
     */
    public function getFilename() : ?string 
    {
        if ( ! $this->hasFilename()) {
            $this->setFilename($this->getDefaultFilename());
        }
        return $this->filename;
    }

    /**
     * Check if "filename" has been set
     *
     * @return bool True if "filename" has been set, false if not
     */
    public function hasFilename() : bool
    {
        return isset($this->filename);
    }

    /**
     * Get a default "filename" value, if any is available
     *
     * @return string|null Default "filename" value or null if no default value is available
     */
    public function getDefaultFilename() : ?string
    {
        return null;
    }
}