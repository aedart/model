<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Json Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\JsonAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait JsonTrait
{
    /**
     * JavaScript Object Notation (JSON)
     *
     * @var string|null
     */
    protected $json = null;

    /**
     * Set json
     *
     * @param string $json JavaScript Object Notation (JSON)
     *
     * @return void
     */
    public function setJson($json)
    {
        $this->json = (string) $json;
    }

    /**
     * Get json
     *
     * If no "json" value has been set, this method will
     * set and return a default "json" value,
     * if any such value is available
     *
     * @see getDefaultJson()
     *
     * @return string|null "json" value or null if no "json" value has been set
     */
    public function getJson()
    {
        if (!$this->hasJson() && $this->hasDefaultJson()) {
            $this->setJson($this->getDefaultJson());
        }
        return $this->json;
    }

    /**
     * Get a default "json" value, if any is available
     *
     * @return string|null A default "json" value or null if no default value is available
     */
    public function getDefaultJson()
    {
        return null;
    }

    /**
     * Check if "json" has been set
     *
     * @return bool True if "json" value has been set, false if not
     */
    public function hasJson()
    {
        return isset($this->json);
    }

    /**
     * Check if a default "json" is available or not
     *
     * @return bool True of a default "json" value is available, false if not
     */
    public function hasDefaultJson()
    {
        $default = $this->getDefaultJson();
        return isset($default);
    }
}