<?php

$out = fopen('php://stdout', 'w'); //output handler
fputs($out, "your output string!!!!!!!!.\n"); //writing output operation
fclose($out); //closing handler
