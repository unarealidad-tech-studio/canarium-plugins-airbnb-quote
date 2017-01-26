<?php
namespace CanariumAirbnbQuote\View\Helper;

use Zend\ServiceManager\ServiceLocatorAwareInterface;  
use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

class ShowBookingWidget extends AbstractHelper
{
    public function __invoke(){
        $sm = $this->getView()->getHelperPluginManager()->getServiceLocator();
		$form = $sm->get('canarium.airbnb_quote.widget_form');
        $view_helper_manager = $sm->get('viewhelpermanager');
        /**
         * @var \Zend\View\Helper\Url $urlHelper
         */
        $urlHelper = $view_helper_manager->get('url');
        $form->setAttribute('action', $urlHelper('airbnbquote'));

        $view = new ViewModel(array(
            'form' => $form
        ));
        $view->setTemplate('widget/booking');

        $htmlOutput = $sm->get('viewrenderer')->render($view);

		return $htmlOutput;
    }
}
