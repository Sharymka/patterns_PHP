<?php

namespace Observer;

class Searcher implements ObserverInterface
{
    private string $name;
    private string $mail;
    private int $workExperience;

    function __construct(string $name, string $mail, int $workExperience) {
        $this->name = $name;
        $this->mail = $mail;
        $this->workExperience = $workExperience;
    }

    public function update(string $vacancy)
    {
        $message = "Появилась новая вакансия $vacancy";
//        mail($this->mail, '',$message);
        echo "сообщение  '$message'  отправлено на почту $this->mail \n";

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return int
     */
    public function getWorkExperience(): int
    {
        return $this->workExperience;
    }
}