<?php

include_once(__DIR__."/Loader/ClassLoader.php");

\Loader\ClassLoader::getInstance();

\Loader\Route::getInstance()->init();