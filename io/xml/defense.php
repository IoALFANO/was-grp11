<?php 
    libxml_disable_entity_loader(); 
    $xmlfile = file_get_contents('person.xml');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT  | LIBXML_DTDLOAD);
    $creds = simplexml_import_dom($dom);
    $user = $creds->name;
    $pass = $creds->age;
    echo "You have logged in as user $user";
?> 
