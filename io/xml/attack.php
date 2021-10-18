<?php 
    $xmlfile = file_get_contents('person.xml');
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT  | LIBXML_DTDLOAD);
    $person = simplexml_import_dom($dom);
    $name = $person->name;
    $age = $person->age;
    echo "Hello ${name}, you have ${age}";
?> 
