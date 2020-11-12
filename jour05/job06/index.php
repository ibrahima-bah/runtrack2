<?php
    function leetspeak($str){
        $char = array("A" => "4","B" => "8","E" => "3","G" => "6","L"=>"1","S"=>"5","L"=>"7");
        
        echo strtr($str,$char);



    }

    leetspeak("PAPA");
?>