<?php
$client = new SoapClient(null, array(
      'location' => "http://localhost/crud_soap/lib/server.php",
      'uri'      => "http://localhost/crud_soap/lib/server.php",
      'trace'    => 1 
    )
);
?>
