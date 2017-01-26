# CanariumAirbnbQuote

Airbnb quote calculator plugin for Canarium

# Installation

Install via composer: 

`composer require unarealidad/canarium-plugins-airbnb-quote dev-master`

Add `CanariumAirbnbQuote` to your Appmaster's `config/application.config.php` or your Appinstance's `config/instance.config.php` under the key `modules`

Copy the global config `data/googlesso.global.php.dist` to your Appinstance's `config/autoload/` directory and remove the `.dist` extension. This is the global configuration.

Copy the sample config `config/canariumairbnbquote.local.php.dist` to your Appinstance's `config/autoload/` directory and remove the `.dist` extension. Customize the options if you need to.

# Configuration

Configuration main key: `canariumairbnbquote`
Sample Config file: `config/canariumairbnbquote.local.php.dist`

Config Item | Sample Value | Required | Description
--- | --- | --- | ---
host_ids | array('host_id1' => 'host name', 'host_id2' => 'host name') | true | The list of airbnb host ids to select
date_format | 'Y m d' | true | The format that will be used for the date selection
locale | 'en-AU' | true | The locale that will be used for querying airbnb apis
currency | 'AUD' | true | The currency to use

# Exposed Pages
_None_

# Additional Customization

## Overriding Plugin Template

By default, the plugin will render the template in `view/canarium-airbnb-quote/widget/show_booking_widget.phtml`. To override this, you need to pass the template when calling `$this->canariumShowBookingWidget()` in your template files:

`$this->canariumShowBookingWidget(<path_to_template>);`

# Exposed Services

## canariumShowBookingWidget View Helper

This plugin will expose a View Helper that can be used in any part of your canarium template.

`$this->canariumShowBookingWidget(<path_to_template>)`

If `<path_to_template>` is not specified, then the plugin will render `view/canarium-airbnb-quote/widget/show_booking_widget.phtml`.
