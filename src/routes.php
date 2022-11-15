<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/homepage', function (Request $request, Response $response, array $args) {

    $data = array(
        "main_heading" => "Welcome to Slim 3 framework for Beginner",
        "sub_heading" => "In this tutorial we are going to learn slim 3 framework"
    );
    return $this->view->render($response, 'homepage.php', $data);
});

$app->get('/about', function (Request $request, Response $response, array $args) {

    $data = array(
        "main_heading" => "About Us",
        "sub_heading" => "In this tutorial we are going to learn slim 3 framework"
    );

    return $this->view->render($response, 'about.php', $data);
});


$app->get('/test', function (Request $request, Response $response, array $args) {

    $data = array(
        "main_heading" => "About Us",
        "sub_heading" => "In this tutorial we are going to learn slim 3 framework"
    );

    return $this->view->render($response, 'about.php', $data);
});


/************************      DmvReported Start       *********************/
// Home Landing page
$app->get("/", function (Request $request, Response $response, array $args){
    $pageName =  substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $data = array('title' => $pageName);
    return $this->view->render($response, 'index.php', $data);
});

//  Contact 
$app->get("/contact", function (Request $request, Response $response, array $args){
    $data = ['title' => 'Contact'];
    return $this->view->render($response, 'contact.php', $data);
});

//  FCRA-agreement
$app->get("/FCRA-agreement", function (Request $request, Response $response, array $args){
    $data = ['title' => 'FCRA-agreement'];
    return $this->view->render($response, 'FCRA-agreement.php', $data);
});


$app->post('/postPackageData', function (Request $request, Response $response) {
    $data = $request->getParsedBody();
    
    $fname          = filter_var($data['fname'], FILTER_SANITIZE_STRING);
    $lname          = filter_var($data['lname'], FILTER_SANITIZE_STRING);
    $states         = filter_var($data['states'], FILTER_SANITIZE_STRING);
    $package        = filter_var($data['package'], FILTER_SANITIZE_STRING);
    $baseUrl        = filter_var($data['baseUrl'], FILTER_SANITIZE_STRING);

    $errorMessage = [];
    if (!$fname) { $errorMessage['fname']       = "Please Enter Your First Name"; }
    if (!$lname) { $errorMessage['lname']       = "Please Enter Your Last Name"; }
    if (!$states) { $errorMessage['states']      = "Please Choose Your state"; }
    if (!$package) { $errorMessage['package']   = "Please Choose your package"; }
    
    if(!empty($errorMessage)){
        $_SESSION['errorMessage'] = $errorMessage;
        return $response->withRedirect($baseUrl); die;
    }
    else{
        unset($data['submit']); // remove the empty filed from array.
        foreach ($data as $k => $v) { $_SESSION[$k] = strip_tags($v); }
        return $response->withRedirect('FCRA-agreement'); 
    }  

});


//  Terms and condition
$app->get("/terms", function (Request $request, Response $response, array $args){
    $data = ['title' => 'TERMS OF SERVICE'];
    return $this->view->render($response, 'terms.php', $data);
});


//  Warning 
$app->get("/warning", function (Request $request, Response $response, array $args){
    $data = ['title' => 'Warning'];
    return $this->view->render($response, 'warning.php', $data);
});

//  Result 
$app->get("/result", function (Request $request, Response $response, array $args){
    $data = ['title' => 'WE HAVE FOUND 3 RECORDS'];
    return $this->view->render($response, 'result.php', $data);
});

//  Billing
$app->get("/billing", function (Request $request, Response $response, array $args){
    $data = ['title' => 'ALMOST READY!'];
    return $this->view->render($response, 'billing.php', $data);
});

/************************      DmvReported End       *********************/