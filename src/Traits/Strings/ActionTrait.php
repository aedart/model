<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Action Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ActionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ActionTrait
{
    /**
     * A process or fact of doing something
     *
     * @var string|null
     */
    protected $action = null;

    /**
     * Set action
     *
     * @param string|null $action A process or fact of doing something
     *
     * @return self
     */
    public function setAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * If no "action" value has been set, this method will
     * set and return a default "action" value,
     * if any such value is available
     *
     * @see getDefaultAction()
     *
     * @return string|null action or null if no action has been set
     */
    public function getAction() : ?string 
    {
        if ( ! $this->hasAction()) {
            $this->setAction($this->getDefaultAction());
        }
        return $this->action;
    }

    /**
     * Check if "action" has been set
     *
     * @return bool True if "action" has been set, false if not
     */
    public function hasAction() : bool
    {
        return isset($this->action);
    }

    /**
     * Get a default "action" value, if any is available
     *
     * @return string|null Default "action" value or null if no default value is available
     */
    public function getDefaultAction() : ?string
    {
        return null;
    }
}