# Granot Lead Posting Gateway

This is an unofficial API for the Granot Lead Posting Gateway. 
Find the documentation on what fields you can pass via the following url: 
http://docs.google.com/View?id=dc9bddx5_10763jwtts

####Install via Composer
```
composer require xclusive/lead-posting-gateway-granot
```

####Use Example:

```

<?php

    require 'vendor/autoload.php';

    $account = new Granot\Account('API_ID_HERE');
    $lead = new Granot\Lead;

    $lead->servtypeid = 101;
    $lead->firstname = 'First Name';
    $lead->lastname = 'Last Name';

    $post = new Granot\PostLead($account, $lead);

    $response = $post->submit();

    print '<pre>';
    print_r($response);
    print '</pre>';
    
?>
    
```
