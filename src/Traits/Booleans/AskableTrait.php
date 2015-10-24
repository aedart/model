<?php namespace Aedart\Model\Traits\Booleans;

/**
 * <h1>Askable Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Booleans\Askable
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Booleans
 */
trait AskableTrait {

    /**
     * Ask - A state that indicates if a question should be asked or not
     *
     * @var bool|null
     */
    protected $ask = null;

    /**
     * Set the given ask
     *
     * @param bool $shouldAsk Ask - A state that indicates if a question should be asked or not
     *
     * @return void
     */
    public function setAsk($shouldAsk) {
        $this->ask = (bool) $shouldAsk;
    }

    /**
     * Get the given ask
     *
     * If no ask has been set, this method will
     * set and return a default ask, if any such
     * value is available
     *
     * @see getDefaultAsk()
     *
     * @return bool|null ask or null if none ask has been set
     */
    public function getAsk() {
        if (!$this->hasAsk() && $this->hasDefaultAsk()) {
            $this->setAsk($this->getDefaultAsk());
        }
        return $this->ask;
    }

    /**
     * Get a default ask value, if any is available
     *
     * @return bool|null A default ask value or Null if no default value is available
     */
    public function getDefaultAsk() {
        return null;
    }

    /**
     * Check if ask has been set
     *
     * @return bool True if ask has been set, false if not
     */
    public function hasAsk() {
        return !is_null($this->ask);
    }

    /**
     * Check if a default ask is available or not
     *
     * @return bool True of a default ask is available, false if not
     */
    public function hasDefaultAsk() {
        return !is_null($this->getDefaultAsk());
    }

    /**
     * Alias for the `getAsk` state
     *
     * @return bool True if a question should be asked, false if not
     */
    public function shouldAsk() {
        return (bool) $this->getAsk();
    }
}