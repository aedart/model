<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Produced At Aware</h1>
 *
 * Component is aware of a string "produced at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ProducedAtAware
{
    /**
     * Set produced at
     *
     * @param string|null $date Date of when this component, entity or something was produced
     *
     * @return self
     */
    public function setProducedAt(?string $date);

    /**
     * Get produced at
     *
     * If no "produced at" value has been set, this method will
     * set and return a default "produced at" value,
     * if any such value is available
     *
     * @see getDefaultProducedAt()
     *
     * @return string|null produced at or null if no produced at has been set
     */
    public function getProducedAt() : ?string ;

    /**
     * Check if "produced at" has been set
     *
     * @return bool True if "produced at" has been set, false if not
     */
    public function hasProducedAt() : bool;

    /**
     * Get a default "produced at" value, if any is available
     *
     * @return string|null Default "produced at" value or null if no default value is available
     */
    public function getDefaultProducedAt() : ?string;
}