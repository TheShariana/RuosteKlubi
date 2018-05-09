<?php
    $serverName;
    function getServerInfo(){
        $content = file_get_contents("https://api.rust-servers.info/status/598");
        $status  = json_decode($content);
        $content = file_get_contents("https://api.rust-servers.info/info/598");
        $info  = json_decode($content, true);

        $content = file_get_contents("https://api.rust-servers.info/update/598");
        $update  = json_decode($content);
        $image = $info['image'];
        $serverName = $info['hostname'];
        if($status->status==='Online'){
        	$color = '#00FF00';
        }
        else{
        	$color = '#FF0000';
        }
        
        $output = '<img src=\''.$image.'\' class=\'server-header img-fluid rounded\'><h5>'.$serverName.'</h5><p>Status: <span style=\'color:'. $color.'\'>'.$status->status.'</span></p>
            <p>Players: <span>'.$status->players.' / '.$status->players_max.'</span></p>
            '; 
        echo $output;
    };