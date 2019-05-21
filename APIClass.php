<?php

class ParliamentAPIRequest{

    public function getBills(){
        $API = "http://api.openparliament.ca/bills/";

        return $API;
    }

    public function getMp(){
        $polAPI = "http://api.openparliament.ca/politicians/";

        return $polAPI;
    }
}