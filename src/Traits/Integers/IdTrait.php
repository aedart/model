<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Id Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\IdAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait IdTrait
{
    /**
     * Unique identifier
     *
     * @var int|null
     */
    protected $id = null;

    /**
     * Set id
     *
     * @param int $identifier Unique identifier
     *
     * @return void
     */
    public function setId($identifier)
    {
        $this->id = (int) $identifier;
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
     * @return int|null "id" value or null if no "id" value has been set
     */
    public function getId()
    {
        if (!$this->hasId() && $this->hasDefaultId()) {
            $this->setId($this->getDefaultId());
        }
        return $this->id;
    }

    /**
     * Get a default "id" value, if any is available
     *
     * @return int|null A default "id" value or null if no default value is available
     */
    public function getDefaultId()
    {
        return null;
    }

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" value has been set, false if not
     */
    public function hasId()
    {
        return isset($this->id);
    }

    /**
     * Check if a default "id" is available or not
     *
     * @return bool True of a default "id" value is available, false if not
     */
    public function hasDefaultId()
    {
        $default = $this->getDefaultId();
        return isset($default);
    }
}