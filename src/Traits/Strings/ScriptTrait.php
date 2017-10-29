<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Script Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ScriptAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ScriptTrait
{
    /**
     * Script of some kind or path to some script
     *
     * @var string|null
     */
    protected $script = null;

    /**
     * Set script
     *
     * @param string|null $script Script of some kind or path to some script
     *
     * @return self
     */
    public function setScript(?string $script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * If no "script" value has been set, this method will
     * set and return a default "script" value,
     * if any such value is available
     *
     * @see getDefaultScript()
     *
     * @return string|null script or null if no script has been set
     */
    public function getScript() : ?string 
    {
        if ( ! $this->hasScript()) {
            $this->setScript($this->getDefaultScript());
        }
        return $this->script;
    }

    /**
     * Check if "script" has been set
     *
     * @return bool True if "script" has been set, false if not
     */
    public function hasScript() : bool
    {
        return isset($this->script);
    }

    /**
     * Get a default "script" value, if any is available
     *
     * @return string|null Default "script" value or null if no default value is available
     */
    public function getDefaultScript() : ?string
    {
        return null;
    }
}