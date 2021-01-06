<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
vap_dump($_ENV);

// $response = Requests::post(
//     "https://hooks.slack.com/services/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",
//     array(
//         'Content-type' => 'application/json'
//     ),
//     json_encode(array(
//         'blocks' =>
//             array(
//                 array(
//                     "type" => "section",
//                     "text" => array(
//                         "type" => "mrkdwn",
//                         "text" => "You have a new request:\n *<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*",
//                     ),
//                 ),
//                 array(
//                     "type" => "section",
//                     "fields" => array(
//                         array(
//                             "type" => "mrkdwn",
//                             "text" => "*Type:*\nComputer (laptop)",
//                         ),
//                         array(
//                             "type" => "mrkdwn",
//                             "text" => "*When:*\nSubmitted Aut 10",
//                         ),
//                     ),
//                 ),
//             ),
//     ))
// );

// var_dump($response);

// if(!$response->success) {
//     echo $response->body;
// }