<?php namespace Aedart\Model\Traits\Strings;

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
     * A key, e.g. indexing key, encryption key or other type of key
     *
     * @var string|null
     */
    protected $key = null;

    /**
     * Set key
     *
     * @param string $key A key, e.g. indexing key, encryption key or other type of key
     *
     * @return void
     */
    public function setKey($key)
    {
        $this->key = (string) $key;
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
     * @return string|null "key" value or null if no "key" value has been set
     */
    public function getKey()
    {
        if (!$this->hasKey() && $this->hasDefaultKey()) {
            $this->setKey($this->getDefaultKey());
        }
        return $this->key;
    }

    /**
     * Get a default "key" value, if any is available
     *
     * @return string|null A default "key" value or null if no default value is available
     */
    public function getDefaultKey()
    {
        return null;
    }

    /**
     * Check if "key" has been set
     *
     * @return bool True if "key" value has been set, false if not
     */
    public function hasKey()
    {
        return isset($this->key);
    }

    /**
     * Check if a default "key" is available or not
     *
     * @return bool True of a default "key" value is available, false if not
     */
    public function hasDefaultKey()
    {
        $default = $this->getDefaultKey();
        return isset($default);
    }
}