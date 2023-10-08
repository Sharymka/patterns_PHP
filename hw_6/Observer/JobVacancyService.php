<?php

namespace Observer;

class JobVacancyService
{
    protected array $searchers;

    public function attach(ObserverInterface $searcher) {
        $this->searchers[] = $searcher;
    }

    public function detach(Searcher $searcher) {
        $this->searchers[] = $searcher;
    }

    public function notify($vacancy) {
        foreach ($this->searchers as $searcher) {
            $searcher->update($vacancy);
        }
    }
    public function addNewVacancy(string $vacancy) {
//        echo "Появилась новая вакансия: $vacancy";

        $this->notify($vacancy);
    }

    /**
     * @return array
     */
    public function getSearchers(): array
    {
        return $this->searchers;
    }

    /**
     * @param array $searchers
     */
    public function setSearchers(array $searchers): void
    {
        $this->searchers = $searchers;
    }


}