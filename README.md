# Places Scout PHP 

[![Latest Stable Version](https://poser.pugx.org/kevinem/places-scout-php/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/places-scout-php)
[![License](https://poser.pugx.org/kevinem/places-scout-php/license?format=flat-square)](https://packagist.org/packages/kevinem/places-scout-php)

The Places Scout API is a highly scalable SAAS platform based on the popular Service Stack open source solution for 
high performance REST web services, and can deliver a wide range of valuable SEO data for enterprise level clients.

## Install

You can pull in the package via composer:
``` bash
$ composer require kevinem/places-scout-php
```

## Documentation

[documentation](https://apihost1.placesscout.com/documentation/index.html)

## Example Usage

``` php

//Create client with credentials
$placesScout = new PlacesScout([
    'username' => '',
    'password' => ''
]);

//You can build requests directly 
$clients = $placesScout->get('/clients');

$client = $placesScout->post('/clients', [
    'json' => [
        //Some data
    ]
]);

$rankingReport = $placesScout->put("/rankingreports/1", [
    //Some data
]);

//Or use helper classes to build request
$clients = new PlacesScoutClients($placesScout);
$response = $clients->lists([
    'query' => [
        'page' => 1,
        'size' => 10
    ]
]);

$rankingReport = new PlacesScoutRankingReports($placesScout);
$rankingReport->update('1', [
    'json' => [
        //Some data
    ]
]);

```

## License 

The MIT License (MIT)
Copyright (c) 2016 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
