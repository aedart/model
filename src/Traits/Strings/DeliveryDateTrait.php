<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Delivery Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DeliveryDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DeliveryDateTrait
{
    /**
     * Date of planned delivery
     *
     * @var string|null
     */
    protected $deliveryDate = null;

    /**
     * Set delivery date
     *
     * @param string|null $date Date of planned delivery
     *
     * @return self
     */
    public function setDeliveryDate(?string $date)
    {
        $this->deliveryDate = $date;

        return $this;
    }

    /**
     * Get delivery date
     *
     * If no "delivery date" value has been set, this method will
     * set and return a default "delivery date" value,
     * if any such value is available
     *
     * @see getDefaultDeliveryDate()
     *
     * @return string|null delivery date or null if no delivery date has been set
     */
    public function getDeliveryDate() : ?string 
    {
        if ( ! $this->hasDeliveryDate()) {
            $this->setDeliveryDate($this->getDefaultDeliveryDate());
        }
        return $this->deliveryDate;
    }

    /**
     * Check if "delivery date" has been set
     *
     * @return bool True if "delivery date" has been set, false if not
     */
    public function hasDeliveryDate() : bool
    {
        return isset($this->deliveryDate);
    }

    /**
     * Get a default "delivery date" value, if any is available
     *
     * @return string|null Default "delivery date" value or null if no default value is available
     */
    public function getDefaultDeliveryDate() : ?string
    {
        return null;
    }
}