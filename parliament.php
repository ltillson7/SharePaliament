<?php
require_once "APIClass.php";

$parliamentRequest = new ParliamentAPIRequest();
$parliamentData = $parliamentRequest->getBills();

$jsonData = file_get_contents($parliamentData);
$json = json_decode($jsonData, true);

/*echo "<pre>";
var_dump($json);
echo "</pre>";*/


foreach($json['objects'] as $value){
    echo
    "<div id=". $value['legisinfo_id'] ." class='col-sm-3'>" . 
        "<div class='card' style='width: 18rem;'>" .
            "<div class='card-body'>" .
                "<h5 class='card-title'>" . 
                    $value['name']['en'] .
                "</h5>" . 
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "<a href='http://api.openparliament.ca/" . $value['url'] . "'>" . "Read More" . "</a>" .
                "</h6>" .
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "Bill Number: " . $value['number'] .
                "</h6>" .
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "Bill Session: " . $value['session'] .
                "</h6>" .
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "Bill Introduced: " . $value['introduced'] .
                "</h6>" .
                    "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "Legislative Info ID: " . $value['legisinfo_id'] .
                "</h6>" .
                "<div class='btn btn-share btn-success clearfix' data-id=" . $value['legisinfo_id'] .">" . "Share" . "</div>" .
                    "<p style='margin-top: 50px'>" .
                    "<a class='btn btn-small'  href='https://developers.facebook.com/docs/sharing/reference/share-dialog'>" . "</a>" .
                "</p>" .
            "</div>" .
        "</div>" .
    "</div>";

}