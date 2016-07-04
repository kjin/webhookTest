<?php
    $filename = 'post'.time().'.json';
    file_put_contents('$filename', file_get_contents('php://input'));
?>