<?php

namespace CanariumAirbnbQuote\Option;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var array
     */
    protected $host_ids = array();

    /**
     * @var string
     */
    protected $date_format = 'Y m d';

    /**
     * @var string
     */
    protected $locale = 'en-AU';

    /**
     * @var string
     */
    protected $currency = 'AUD';

    /**
     * @return array
     */
    public function getHostIds() {
        return $this->host_ids;
    }

    /**
     * @param array $host_ids
     */
    public function setHostIds($host_ids) {
        $this->host_ids = $host_ids;
    }

    /**
     * @return string
     */
    public function getDateFormat() {
        return $this->date_format;
    }

    /**
     * @param string $date_format
     */
    public function setDateFormat($date_format) {
        $this->date_format = $date_format;
    }

    /**
     * @return string
     */
    public function getLocale() {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale) {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
    }
}
