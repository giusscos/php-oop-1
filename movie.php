<?php

class Movie
{
    public $title;
    public $date;
    public $time;
    public $stars;

    function __construct($title, $date, $time, $stars)
    {
        $this->set_title($title);
        $this->set_date($date);
        $this->set_time($time);
        $this->set_stars($stars);
    }

    function set_title($title)
    {
        if($title){
            $this->title = $title;
        } else {
            $this->title = 'Sconosciuto';
        }
    }
    function set_date($date)
    {
        if($date){
            $this->date = $date;
        } else {
            $this->date = '01/01/1900';
        }
    }
    function set_time($time)
    {
        if($time){
            $this->time = $time;
        } else {
            $this->time = '0';
        }
    }
    function set_stars($stars)
    {
        if($stars){
            $this->stars = $stars;
        } else {
            $this->stars = '0';
        }
    }

    function get_info()
    {
        return 'Nome: ' . $this->title . '; Data uscita: ' . $this->date . '; Durata: ' . $this->time . '; Valutazione: ' . $this->stars . ';';
    }
}
