<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $score;
    public $genre;

    public function  __construct($_title, $_genre, $_score)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->score = $_score;
    }

}