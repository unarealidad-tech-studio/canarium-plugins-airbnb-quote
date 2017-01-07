<?php

namespace CanariumAirbnbQuote\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

use CanariumAirbnbQuote\Service\AirbnbQuote;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
    private $service;

    public function indexAction()
    {
        return new ViewModel();
    }

    /**
     * @return \CanariumAirbnbQuote\Service\AirbnbQuote
     */
    private function getService()
    {
        if (!$this->service) {
            $this->service = $this->getServiceLocator()->get('canarium.airbnb_quote.service');
        }
        return $this->service;
    }

}
