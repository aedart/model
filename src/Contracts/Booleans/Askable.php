<?php namespace Aedart\Model\Contracts\Booleans;

/**
 * <h1>Askable</h1>
 *
 * Component is aware of a state that indicates if a question should
 * be asked or not.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Booleans
 */
interface Askable
{
    /**
     * Set ask
     *
     * @param bool $shouldAsk A state that indicates if a question should be asked or not
     *
     * @return void
     */
    public function setAsk($shouldAsk);

    /**
     * Get ask
     *
     * If no "ask" value has been set, this method will
     * set and return a default "ask" value,
     * if any such value is available
     *
     * @see getDefaultAsk()
     *
     * @return bool|null "ask" value or null if no "ask" value has been set
     */
    public function getAsk();

    /**
     * Get a default "ask" value, if any is available
     *
     * @return bool|null A default "ask" value or null if no default value is available
     */
    public function getDefaultAsk();

    /**
     * Check if "ask" has been set
     *
     * @return bool True if "ask" value has been set, false if not
     */
    public function hasAsk();

    /**
     * Check if a default "ask" is available or not
     *
     * @return bool True of a default "ask" value is available, false if not
     */
    public function hasDefaultAsk();

    /**
     * Alias for the `getAsk` state
     *
     * @return bool True if a question should be asked, false if not
     */
    public function shouldAsk();
}