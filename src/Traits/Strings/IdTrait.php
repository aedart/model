<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Id Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IdAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IdTrait
{
    /**
     * Unique identifier
     *
     * @var string|null
     */
    protected $id = null;

    /**
     * Set id
     *
     * @param string|null $identifier Unique identifier
     *
     * @return self
     */
    public function setId(?string $identifier)
    {
        $this->id = $identifier;

        return $this;
    }

    /**
     * Get id
     *
     * If no "id" value has been set, this method will
     * set and return a default "id" value,
     * if any such value is available
     *
     * @see getDefaultId()
     *
     * @return string|null id or null if no id has been set
     */
    public function getId() : ?string 
    {
        if ( ! $this->hasId()) {
            $this->setId($this->getDefaultId());
        }
        return $this->id;
    }

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" has been set, false if not
     */
    public function hasId() : bool
    {
        return isset($this->id);
    }

    /**
     * Get a default "id" value, if any is available
     *
     * @return string|null Default "id" value or null if no default value is available
     */
    public function getDefaultId() : ?string
    {
        return null;
    }
}