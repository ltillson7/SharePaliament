<?php
require_once "APIClass.php";

$newRequest = new ParliamentAPIRequest();
$newData = $newRequest->getMp();

$myJsonData = file_get_contents($newData);
$myJson = json_decode($myJsonData, true);


/*echo "<pre>";
var_dump($myJson);
echo "</pre>";*/

$idx = 0;
foreach($myJson['objects'] as $value){
    echo
    "<div class='col-sm-3' id=".$idx.">" . 
        "<div class='card' style='width: 18rem;'>" .
            "<div class='card-body'>" .
                "<h5 class='card-title'>" . 
                    $value['name'] .
                "</h5>" . 
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                    "Current Riding: " . $value['current_riding']['name']['en'] . ", " . $value['current_riding']['province'].
                "</h6>" .
                "<h6 class='card-subtitle mb-2 text-muted'>" .
                     "Political Party: " . $value['current_party']['short_name']['en'] .
                "</h6>" .
                "<div class='btn btn-share btn-success clearfix' data-id=" . $idx . ">" . "Share" . "</div>" .
                "<p style='margin-top: 50px'>" .
                "<a class='btn btn-small'  href='https://developers.facebook.com/docs/sharing/reference/share-dialog'>" . "</a>" .
                "</p>" .
            "</div>" .
        "</div>" .
    "</div>";

    $idx++;

}


