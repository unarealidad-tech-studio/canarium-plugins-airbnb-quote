<?php

namespace CanariumAirbnbQuote\Form;

use Zend\Form\Form;
use Zend\Form\Element;


class WidgetForm extends Form
{
    public function __construct($format, $hosts)
    {
        parent::__construct();

        $this->add(array(
            'name' => 'checkin',
            'type' => 'Zend\Form\Element\Date',
            'options' => array(
                'label' => 'Check in:',
                'format' => $format,
            ),
            'attributes' => array(
                'required' => 'required'
            )
        ));

        $this->add(array(
            'name' => 'checkout',
            'type' => 'Zend\Form\Element\Date',
            'options' => array(
                'label' => 'Check out:',
                'format' => $format,
            ),
            'attributes' => array(
                'required' => 'required'
            )
        ));

        $this->add(array(
            'name' => 'number_of_guests',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'required' => 'required',
                'type' => 'number',
            ),
            'options' => array(
                'label' => 'Guests:'
            ),
        ));

        $this->add(array(
            'name' => 'host_id',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'required' => 'required',
            ),
            'options' => array(
                'label' => 'Host ID:',
                'empty_option' => 'Select One...',
                'value_options' => $hosts
            ),
        ));

        /* Others */
        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'id' 	=> 'submit',
                'type'  => 'submit',
                'value' => 'Get Quote'
            ),
        ));
    }
}
