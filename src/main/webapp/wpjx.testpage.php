<?php 
require (__DIR__ . '/vendor/autoload.php'); // Start autoload 

use Jaxon\Jaxon;
use Jaxon\Response\Response;          // and the Response class

// The function called by the browser
function helloworld($name) 
{ 
    $response = new Response();          // Instance the response class 
    $response->alert("Hello $name");     // Invoke the alert method
    return $response;                    // Return the response to the browser
}

$jaxon = jaxon();                        // Get the core singleton object   
$jaxon->register(Jaxon::USER_FUNCTION, 'helloworld'); // Register the function with Jaxon 
$jaxon->processRequest();                // Call the Jaxon processing engine  

?>
<!doctype html>
<html>
<head>
    <title>Jaxon 1.0.0 Test</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <?php echo $jaxon->getCss() ?>    
</head>
<body>
    Enter your name:
    <input type="text" name="username" id="username" />
    <input type="button" value="Submit" onclick="jaxon_helloworld(jaxon.$('username').value);return false;" />
</body>
<!-- Generate the jaxon javascript-->
<?php
    echo $jaxon->getJs();
    echo $jaxon->getScript();
?>