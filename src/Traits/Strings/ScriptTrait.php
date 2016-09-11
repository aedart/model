<?php
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
     * Script
     *
     * @var string|null
     */
    protected $script = null;

    /**
     * Set the given script
     *
     * @param string $script Script
     *
     * @return void
     */
    public function setScript($script)
    {
        $this->script = $script;
    }

    /**
     * Get the given script
     *
     * If no script has been set, this method will
     * set and return a default script, if any such
     * value is available
     *
     * @see getDefaultScript()
     *
     * @return string|null script or null if none script has been set
     */
    public function getScript()
    {
        if (!$this->hasScript() && $this->hasDefaultScript()) {
            $this->setScript($this->getDefaultScript());
        }
        return $this->script;
    }

    /**
     * Get a default script value, if any is available
     *
     * @return string|null A default script value or Null if no default value is available
     */
    public function getDefaultScript()
    {
        return null;
    }

    /**
     * Check if script has been set
     *
     * @return bool True if script has been set, false if not
     */
    public function hasScript()
    {
        return !is_null($this->script);
    }

    /**
     * Check if a default script is available or not
     *
     * @return bool True of a default script is available, false if not
     */
    public function hasDefaultScript()
    {
        return !is_null($this->getDefaultScript());
    }
}