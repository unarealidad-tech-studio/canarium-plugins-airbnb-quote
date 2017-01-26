<?php

namespace CanariumAirbnbQuote\Form;

use Zend\InputFilter\InputFilter;

class WidgetFilter extends InputFilter
{
    public function __construct($valid_hosts)
    {
        $this->add(array(
            'name' => 'checkin',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
        ));

        $this->add(array(
            'name' => 'checkout',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
        ));

        $this->add(array(
            'name'       => 'number_of_guests',
            'required'   => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
                array('name' => 'Int'),
            ),
        ));

        $this->add(array(
            'name' => 'host_id',
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim'),
            ),
            'validators' => array(
                array (
                    'name' => 'InArray',
                    'options' => array(
                        'haystack' => $valid_hosts,
                        'messages' => array(
                            'notInArray' => 'Invalid option selected.'
                        ),
                    ),
                ),
            )
        ));
    }


}
