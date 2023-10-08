<?php

$invoker = new Invoker();
$invoker->setOnStart(new CopyCommand('Привет'));
