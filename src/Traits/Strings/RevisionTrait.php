<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * A revision, batch number or other identifier
     *
     * @var string|null
     */
    protected $revision = null;

    /**
     * Set revision
     *
     * @param string|null $revision A revision, batch number or other identifier
     *
     * @return self
     */
    public function setRevision(?string $revision)
    {
        $this->revision = $revision;

        return $this;
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
     * @return string|null revision or null if no revision has been set
     */
    public function getRevision() : ?string 
    {
        if ( ! $this->hasRevision()) {
            $this->setRevision($this->getDefaultRevision());
        }
        return $this->revision;
    }

    /**
     * Check if "revision" has been set
     *
     * @return bool True if "revision" has been set, false if not
     */
    public function hasRevision() : bool
    {
        return isset($this->revision);
    }

    /**
     * Get a default "revision" value, if any is available
     *
     * @return string|null Default "revision" value or null if no default value is available
     */
    public function getDefaultRevision() : ?string
    {
        return null;
    }
}