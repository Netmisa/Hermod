<?php

namespace AppBundle\Model\Api\Json\LocationPatch;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation as JMS;
use AppBundle\Validator as AppAssert;
use AppBundle\Model\Api\Json\Document\Elevator as ElevatorDocument;
use AppBundle\Model\Api\Json\LocationPatch\Gps;

class Elevator
{
    /**
     * @Assert\NotBlank(message="This field is missing.")
     * @Assert\Regex("/^elevator/")
     * @Assert\Type("string")
     * @Jms\Type("string")
     */
    private $type;

    /**
     * @Assert\NotBlank(message="This field is missing.")
     * @Assert\Valid()
     * @Assert\Type("AppBundle\Model\Api\Json\Document\Elevator")
     * @JMS\Type("AppBundle\Model\Api\Json\Document\Elevator")
     */
    private $elevator;

    /**
     * @Assert\NotBlank(message="This field is missing.")
     * @Assert\Valid()
     * @Assert\Type("AppBundle\Model\Api\Json\LocationPatch\Location")
     * @JMS\Type("AppBundle\Model\Api\Json\LocationPatch\Location")
     * @JMS\SerializedName("current_location")
     */
    private $currentLocation;

    /**
     * @Assert\NotBlank(message="This field is missing.")
     * @Assert\Valid()
     * @JMS\SerializedName("patched_location")
     * @Assert\Type("AppBundle\Model\Api\Json\LocationPatch\Location")
     * @JMS\Type("AppBundle\Model\Api\Json\LocationPatch\Location")
     */
    private $patchedLocation;

    /**
     * @Assert\NotBlank(message="This field is missing.")
     * @Assert\Valid()
     * @JMS\SerializedName("reported_location")
     * @Assert\Type("AppBundle\Model\Api\Json\LocationPatch\Gps")
     * @JMS\Type("AppBundle\Model\Api\Json\LocationPatch\Gps")
     */
    private $reporterLocation;

    public function getType() : ?string
    {
        return $this->type;
    }

    public function setType($type) : Elevator
    {
        $this->type = $type;

        return $this;
    }

    public function getElevator() : ?ElevatorDocument
    {
        return $this->elevator;
    }

    public function setElevator($elevator) : Elevator
    {
        $this->elevator = $elevator;

        return $this;
    }

    public function getCurrentLocation() : ?Location
    {
        return $this->currentLocation;
    }

    public function setCurrentLocation($currentLocation) : Elevator
    {
        $this->currentLocation = $currentLocation;

        return $this;
    }

    public function getPatchedLocation() : ?Location
    {
        return $this->patchedLocation;
    }

    public function setPatchedLocation($patchedLocation) : Location
    {
        $this->patchedLocation = $patchedLocation;

        return $this;
    }

    public function getReporterLocation() : Gps
    {
        return $this->reporterLocation;
    }

    public function setReporterLocation($reporterLocation)
    {
        $this->reporterLocation = $reporterLocation;

        return $this;
    }
}
