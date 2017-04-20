<?php
include 'index17-IncludeRequireFunctions(create text templete).php';
include_once('index17-IncludeRequireFunctions(create text templete).php');//include a only once

echo '<br>'.$page1;
echo '<br>usage of previous templete using INCLUDE FUNCTION ,   not kill entire page ,if have mistake the <i>path or file name of included page</i>, dispaly other texts of the current page';


require 'index17-IncludeRequireFunctions(create text templete).php';
require_once('index17-IncludeRequireFunctions(create text templete).php');//require a only once
echo '<br>'.$page1;
echo '<br>usage of previous templete using REQUIRE FUNCTION, kill entire page,if have mistake the <i>path or file name of required page</i>,  dot display other texts of the current page';


?>