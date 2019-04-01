<?php

class Song {
    //assign attributes of song and construct
	private $title;
	private $artist;
	private $genre;

	public function __construct($title, $artist, $genre) {
		$this->title = $title;
		$this->artist = $artist;		
		$this->genre = $genre;
	}
        // put get function in to make artist searchable in library class methods
public function __get($artist){
      return $this->$artist;
    }

    // convert to string to show data for songs 
    public function __toString(){
            return 'Title: ' . $this->title . ' Artist: ' . $this->artist . ' Genre: ' . $this->genre . "\n";
        }
}

