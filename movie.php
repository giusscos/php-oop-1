<?php

class Movie
{
    public $title;
    public $date;
    public $time;
    public $stars;

    function __construct($title, $date, $time, $stars)
    {
        $this->title = $title;
        $this->date = $date;
        $this->time = $time;
        $this->stars = $stars;
    }

    function set_title($title)
    {
        $this->title = $title;
    }

    function get_info()
    {
        return 'Nome: ' . $this->title . '; Data uscita: ' . $this->date . '; Durata: ' . $this->time . '; Valutazione: ' . $this->stars . ';';
    }
}
