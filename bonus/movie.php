<?php
class Movie
{
    public $poster;
    public $title;
    public $vote;
    public $actors = [];

    function __construct($poster, $title, $vote )
    {
        $this->set_poster($poster);
        $this->set_title($title);
        $this->set_vote($vote);
    }

    public function addActor($actor){
        if(!in_array($actor, $this->actors)){
            array_push($this->actors, $actor);
        }
    }
    
    public function removeActor($actor){
        if(in_array($actor, $this->actors)){
            $position = array_search($actor, $this->actors);
            unset($this->actors[$position]);
        }
    }

    public function getCast(){
        return $this->actors;
    }
    
    public function set_poster($poster)
    {
        if($poster){
            $this->poster = $poster;
        } else {
            $this->poster = '0';
        }
    }
    
    public function set_title($title)
    {
        if($title){
            $this->title = $title;
        } else {
            $this->title = 'Sconosciuto';
        }
    }

    public function set_vote($vote)
    {
        if($vote){
            $this->vote = $vote;
        } else {
            $this->vote = '0';
        }
    }

    public function get_poster()
    {
        return $this->poster;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_vote()
    {
        return $this->vote;
    }
}
