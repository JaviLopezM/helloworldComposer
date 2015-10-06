<?php
//require "Hello.php";

require __DIR__ . "/src/Hello.php";

use Com\Iesebre\Dam2\javilopez\helloworldcomposer\Hello;




$greetings = new Hello();

$greetings->sayHello();