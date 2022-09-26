<?php

class Movie {
    public $poster;
    public $title;
    public $vote;

    function __construct($poster, $title, $vote)
    {
        if($poster){
            $this->poster = $poster;
        } else {
            $this->poster = 'null';
        }
        $this->title = $title;
        $this->vote = $vote;
    }

    function get_info(){
        return $this->poster . ' >> ' . $this->title . ' >> ' . $this->vote . ';';
    }

    function get_poster(){
        return $this->poster;
    }
    function get_title(){
        return $this->title;
    }
    function get_vote(){
        return $this->vote;
    }
}