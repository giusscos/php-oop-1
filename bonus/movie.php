<?php
class Movie
{
    public $poster;
    public $title;
    public $vote;
    public $actors;

    function __construct($poster, $title, $vote, $actors )
    {
        if ($poster) {
            $this->poster = $poster;
        } else {
            $this->poster = 'null';
        }
        if ($title) {
            $this->title = $title;
        } else {
            $this->title = 'null';
        }
        if ($vote) {
            $this->vote = $vote;
        } else {
            $this->vote = '0';
        }
        $this->actors = $actors;
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
