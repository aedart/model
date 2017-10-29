<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $json JavaScript Object Notation (JSON)
     *
     * @return self
     */
    public function setJson(?string $json)
    {
        $this->json = $json;

        return $this;
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
     * @return string|null json or null if no json has been set
     */
    public function getJson() : ?string 
    {
        if ( ! $this->hasJson()) {
            $this->setJson($this->getDefaultJson());
        }
        return $this->json;
    }

    /**
     * Check if "json" has been set
     *
     * @return bool True if "json" has been set, false if not
     */
    public function hasJson() : bool
    {
        return isset($this->json);
    }

    /**
     * Get a default "json" value, if any is available
     *
     * @return string|null Default "json" value or null if no default value is available
     */
    public function getDefaultJson() : ?string
    {
        return null;
    }
}