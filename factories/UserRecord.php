<?php

namespace factories\postgresql;

use interfaces\RecordInterface;

class UserRecord implements RecordInterface {
    public string $name = 'Ivan Gorin';
    public int $id = 14;

    public function __toString(): string
    {
        return $this->name . " [" . $this->id . "]";
    }
}