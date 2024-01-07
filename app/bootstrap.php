<?php

require_once "config/config.php";

require_once "helpers/url_helper.php";

function autoload ($classname){
    require_once "libraries/{$classname}.php";
}
spl_autoload_register("autoload");