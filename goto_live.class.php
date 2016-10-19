<?php

//set data mechanism to make it live
//ronvalero@2016
Class goto_live{

var $connection = "";
var $data_value = 0;
var $recipient_data = "";

function __construct(){
//will be executed once we find the connection
}

function enable_gathering($data_value_present){
$this->data_value = $data_value_present;
}

function generate_recipient($recipient_data_present){
$this->recipient_data = $recipient_data_present;
}

function connect_to_client($connection_present){
$this->connection = $connection_present;
}
}
