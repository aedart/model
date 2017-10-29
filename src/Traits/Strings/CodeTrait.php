<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $code The code for something, e.g. language code, classification code, or perhaps an artifacts identifier
     *
     * @return self
     */
    public function setCode(?string $code)
    {
        $this->code = $code;

        return $this;
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
     * @return string|null code or null if no code has been set
     */
    public function getCode() : ?string 
    {
        if ( ! $this->hasCode()) {
            $this->setCode($this->getDefaultCode());
        }
        return $this->code;
    }

    /**
     * Check if "code" has been set
     *
     * @return bool True if "code" has been set, false if not
     */
    public function hasCode() : bool
    {
        return isset($this->code);
    }

    /**
     * Get a default "code" value, if any is available
     *
     * @return string|null Default "code" value or null if no default value is available
     */
    public function getDefaultCode() : ?string
    {
        return null;
    }
}