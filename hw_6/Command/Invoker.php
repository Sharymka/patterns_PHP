<?php


class Invoker
{
    private $onStart;

    private $onFinish;

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        if ($this->onStart instanceof Command) {
            $this->onStart->execute();
        }

        if ($this->onFinish instanceof Command) {
            $this->onFinish->execute();
        }

    }
}