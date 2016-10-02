<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Revision Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\RevisionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait RevisionTrait
{
    /**
     * A revision, path number or other identifier
     *
     * @var string|null
     */
    protected $revision = null;

    /**
     * Set revision
     *
     * @param string $revision A revision, path number or other identifier
     *
     * @return void
     */
    public function setRevision($revision)
    {
        $this->revision = (string) $revision;
    }

    /**
     * Get revision
     *
     * If no "revision" value has been set, this method will
     * set and return a default "revision" value,
     * if any such value is available
     *
     * @see getDefaultRevision()
     *
     * @return string|null "revision" value or null if no "revision" value has been set
     */
    public function getRevision()
    {
        if (!$this->hasRevision() && $this->hasDefaultRevision()) {
            $this->setRevision($this->getDefaultRevision());
        }
        return $this->revision;
    }

    /**
     * Get a default "revision" value, if any is available
     *
     * @return string|null A default "revision" value or null if no default value is available
     */
    public function getDefaultRevision()
    {
        return null;
    }

    /**
     * Check if "revision" has been set
     *
     * @return bool True if "revision" value has been set, false if not
     */
    public function hasRevision()
    {
        return isset($this->revision);
    }

    /**
     * Check if a default "revision" is available or not
     *
     * @return bool True of a default "revision" value is available, false if not
     */
    public function hasDefaultRevision()
    {
        $default = $this->getDefaultRevision();
        return isset($default);
    }
}