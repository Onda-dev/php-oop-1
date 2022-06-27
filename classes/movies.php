<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $score;
    public $genre;
    public $price;

    public function  __construct($_title, $_director, $_genre, $_score, $_price)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->score = $_score;
        $this->price = $_price;
    }

    public function getHalloweenPromo() {
        if($this->genre == 'Horror') {
            return $this->price * 0.5;
        }
        
        return false;
    }

}