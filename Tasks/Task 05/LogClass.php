<?php

class Logger{
    static public $logCount = 0;

    static function logMsg(){
        echo "I'M MESSAGE!";
        echo self::$logCount ++;
    }
}

$log = new Logger();
$log->logMsg();echo"<br>";
$log->logMsg();echo"<br>";
$log->logMsg();echo"<br>";
echo $log::$logCount;