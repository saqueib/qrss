# qrss
An API Class to parse the RSS feed into json with cache option http://www.qcode.in/complete-rss-feed-reader-app-using-vue-js-vuex-php-rss-parser-api

## Getting Start
Grab the `QRss` class and use require it in your php file.

```php
require 'src/QRss.php';

// To fetch an RSS feed as json use
(new Qrss('https://news.google.com/?output=rss'))->json();

// For fresh copy you can use fresh() which will ignore cache
(new Qrss('https://news.google.com/?output=rss'))->fresh()->json()
```

## Override Parser
You can also extend the parse method to customize the output.

```php
class MyQrss extends QRss {

     protected function parse($xml)
     {
         // you have all the xml elements as SimpleXMLElement object
         // parse it however you want, return the array from this
          return [
              'title' => (string) $xml->channel->title
          ];
      }
 }

 (new MyQrss('https://news.google.com/?output=rss'))->json();
```