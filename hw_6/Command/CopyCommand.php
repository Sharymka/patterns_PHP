<?php

class CopyCommand implements Command
{
    function __construct(private string $text) {}
    public function execute() {
        echo"Copy";
    }
}