<?php

    function getServerInfo(){
        $content = file_get_contents("https://api.rust-servers.info/status/598");
        $status  = json_decode($content);
        $content = file_get_contents("https://api.rust-servers.info/info/598");
        $info  = json_decode($content);
        $content = file_get_contents("https://api.rust-servers.info/update/598");
        $update  = json_decode($content);
        if($status->status==='Online'){
        	$color = '#00FF00';
        }
        else{
        	$color = '#FF0000';
        }
        $output = '<p>Status: <span style=\'color:'. $color.'\'>'.$status->status.'</span></p>
        		<p>IP: <span>'.$info->ip.'</span></p>
        		<p>Port: <span>'.$info->port.'</span></p>
        		<p>Players: <span>'.$status->players.' / '.$status->players_max.'</span></p>
        		<p>Max Players Online: <span>'.$info->players_max_forever.' (1.10.2017 ->)</span></p>
        		<p>Uptime: <span>'.$status->uptime.'</span></p>
        		<p>Server Mode: <span>'.$info->server_mode.'</span></p>
        		<p>Wipe Cycle: <span>'.$info->wipe_cycle.'</span></p>
        		<p>Updated: <span>'.$update->datetime_full.'</span></p>
        		'; 
        echo $output;
    };