<?php
$head=array('Balance','User_id');
$csv=fopen('outstanding.csv', 'w');
fputcsv($csv,$head);



?>