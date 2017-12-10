<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Produced At Aware</h1>
 *
 * Component is aware of a int "produced at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface ProducedAtAware
{
    /**
     * Set produced at
     *
     * @param int|null $date Date of when this component, entity or something was produced
     *
     * @return self
     */
    public function setProducedAt(?int $date);

    /**
     * Get produced at
     *
     * If no "produced at" value has been set, this method will
     * set and return a default "produced at" value,
     * if any such value is available
     *
     * @see getDefaultProducedAt()
     *
     * @return int|null produced at or null if no produced at has been set
     */
    public function getProducedAt() : ?int ;

    /**
     * Check if "produced at" has been set
     *
     * @return bool True if "produced at" has been set, false if not
     */
    public function hasProducedAt() : bool;

    /**
     * Get a default "produced at" value, if any is available
     *
     * @return int|null Default "produced at" value or null if no default value is available
     */
    public function getDefaultProducedAt() : ?int;
}