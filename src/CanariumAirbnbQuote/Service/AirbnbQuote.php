<?php

namespace CanariumAirbnbQuote\Service;

use Doctrine\Common\Persistence\ObjectManager;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AirbnbQuote implements ServiceLocatorAwareInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;

    /**
     * @var ObjectManager
     */
    protected $objectManager;


    public function showBookingWidget()
    {

    }

    /**
     * Retrieve service manager instance
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     * Set service manager instance
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return AirbnbQuote
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        return $this;
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getObjectManager()
    {
        if (!$this->objectManager) {
            $this->objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->objectManager;
    }

    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
        return $this;
    }

}
