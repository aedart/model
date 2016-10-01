<?php namespace Aedart\Model\Traits\Strings;

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
     * Script of some kind
     *
     * @var string|null
     */
    protected $script = null;

    /**
     * Set script
     *
     * @param string $script Script of some kind
     *
     * @return void
     */
    public function setScript($script)
    {
        $this->script = (string) $script;
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
     * @return string|null "script" value or null if no "script" value has been set
     */
    public function getScript()
    {
        if (!$this->hasScript() && $this->hasDefaultScript()) {
            $this->setScript($this->getDefaultScript());
        }
        return $this->script;
    }

    /**
     * Get a default "script" value, if any is available
     *
     * @return string|null A default "script" value or null if no default value is available
     */
    public function getDefaultScript()
    {
        return null;
    }

    /**
     * Check if "script" has been set
     *
     * @return bool True if "script" value has been set, false if not
     */
    public function hasScript()
    {
        return isset($this->script);
    }

    /**
     * Check if a default "script" is available or not
     *
     * @return bool True of a default "script" value is available, false if not
     */
    public function hasDefaultScript()
    {
        $default = $this->getDefaultScript();
        return isset($default);
    }
}