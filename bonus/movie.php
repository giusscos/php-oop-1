<?php
class Movie
{
    public $poster;
    public $title;
    public $vote;
    public $actors;

    function __construct($poster, $title, $vote, $actors )
    {
        $this->set_poster($poster);
        $this->set_title($title);
        $this->set_vote($vote);
        $this->actors = $actors;
    }

    function set_poster($poster)
    {
        if($poster){
            $this->poster = $poster;
        } else {
            $this->poster = '0';
        }
    }

    function set_title($title)
    {
        if($title){
            $this->title = $title;
        } else {
            $this->title = 'Sconosciuto';
        }
    }

    function set_vote($vote)
    {
        if($vote){
            $this->vote = $vote;
        } else {
            $this->vote = '0';
        }
    }
    
    function get_info()
    {
        return $this->poster . ' >> ' . $this->title . ' >> ' . $this->vote . ' >> ' . $this->actors . ';';
    }

    function get_poster()
    {
        return $this->poster;
    }
    function get_title()
    {
        return $this->title;
    }
    function get_vote()
    {
        return $this->vote;
    }

    function get_cast(){
        return $this->actors;
    }
}
