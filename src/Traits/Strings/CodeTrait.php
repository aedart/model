<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Code Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CodeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CodeTrait
{
    /**
     * The code for something, e.g. language code, classification code, or perhaps an artifacts identifier
     *
     * @var string|null
     */
    protected $code = null;

    /**
     * Set code
     *
     * @param string $code The code for something, e.g. language code, classification code, or perhaps an artifacts identifier
     *
     * @return void
     */
    public function setCode($code)
    {
        $this->code = (string) $code;
    }

    /**
     * Get code
     *
     * If no "code" value has been set, this method will
     * set and return a default "code" value,
     * if any such value is available
     *
     * @see getDefaultCode()
     *
     * @return string|null "code" value or null if no "code" value has been set
     */
    public function getCode()
    {
        if (!$this->hasCode() && $this->hasDefaultCode()) {
            $this->setCode($this->getDefaultCode());
        }
        return $this->code;
    }

    /**
     * Get a default "code" value, if any is available
     *
     * @return string|null A default "code" value or null if no default value is available
     */
    public function getDefaultCode()
    {
        return null;
    }

    /**
     * Check if "code" has been set
     *
     * @return bool True if "code" value has been set, false if not
     */
    public function hasCode()
    {
        return isset($this->code);
    }

    /**
     * Check if a default "code" is available or not
     *
     * @return bool True of a default "code" value is available, false if not
     */
    public function hasDefaultCode()
    {
        $default = $this->getDefaultCode();
        return isset($default);
    }
}