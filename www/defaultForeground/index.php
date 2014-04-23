<?php
/*
 * 前端界面的入口
 */
//启动自动加载
require(__DIR__.'/../../system/vendor/autoload.php');
//建立应用,参数1：应用命名空间；参数2：前端目录。
$app= \Monkey\Monkey::createApp('DefaultApp',strtr(__DIR__,DIRECTORY_SEPARATOR,'/'));
//运行应用
$app->run();