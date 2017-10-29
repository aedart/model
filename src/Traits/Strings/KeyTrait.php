<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Key Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\KeyAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait KeyTrait
{
    /**
     * Key, e.g. indexing key, encryption key or other type of key
     *
     * @var string|null
     */
    protected $key = null;

    /**
     * Set key
     *
     * @param string|null $key Key, e.g. indexing key, encryption key or other type of key
     *
     * @return self
     */
    public function setKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * If no "key" value has been set, this method will
     * set and return a default "key" value,
     * if any such value is available
     *
     * @see getDefaultKey()
     *
     * @return string|null key or null if no key has been set
     */
    public function getKey() : ?string 
    {
        if ( ! $this->hasKey()) {
            $this->setKey($this->getDefaultKey());
        }
        return $this->key;
    }

    /**
     * Check if "key" has been set
     *
     * @return bool True if "key" has been set, false if not
     */
    public function hasKey() : bool
    {
        return isset($this->key);
    }

    /**
     * Get a default "key" value, if any is available
     *
     * @return string|null Default "key" value or null if no default value is available
     */
    public function getDefaultKey() : ?string
    {
        return null;
    }
}