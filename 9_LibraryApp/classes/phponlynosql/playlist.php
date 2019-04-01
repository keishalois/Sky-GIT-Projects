<?php

class Playlist {
    // assign attributes to playlist and only construct name and user
    //we add songs in later once the playlist has been created
    private $playlistName;
    private $playlistUser;
    private $songs = [];
   
    public function __construct($playlistName, $playlistUser){
        $this->playlistName = $playlistName;
        $this->playlistUser = $playlistUser;
    } 

    // set values for playlist name only, you wouldn't want to change the playlist user
    // but the user may want to rename the playlist
    public function __set($playlistName, $value){
        $this->$playlistName = $value;
        return $this->$playlistName = $value;  
    }
    
    // to allow the get playlist function in library class access, 
    // need to get playlist name - for showing the playlist linked to the user
    public function __get($playlistName){
        return $this->$playlistName;
   }
    
    public function set($playlistName, $value){
        $this->$playlistName = $value;
    }
    
    // to allow the get playlist function in library class access,
    // need to get playlist name - for being able to change the playlist name (and set above)
    public function get($playlistName){
        return $this->$playlistName;
    }
    
     
    // convert to string to show data for get playlist function in library class  
    public function __toString(){
            return 'Playlist Name: ' . $this->playlistName . ' Playlist User: ' . $this->playlistUser . "\n";
        }
        
// the next two functions listed are relevant to a particular playlist
//function to push a song to the array of $songs in a playlist    
    public function addSong($song) {
        array_push($this->songs, $song);
    }
// function to list all songs in a particular playlist belonging to a user    
    public function listSongs() {
        echo "Playlist Name: " . $this->playlistName . " Playlist User: " . $this->playlistUser . "\n";
        foreach ($this->songs as $value) {
            echo $value . "\n";
        }
        echo "\n";
    }
    
    public function removeSong($title) {
    // create null song array - this needs to be an array to compare to songs array
    $removeThisSong[] = null;
    // Loop through the song array
    foreach ($this->songs as $value) {
        // Check the value of the current items properties in the array to see if they match the song title we are looking for
        if($value->title == $title){
        //if the title does match the one we are looking for, push it to the remove song array
            $removeThisSong = array($value);
            echo "\n check what we are removing from the playlist here: \t" . $value . "\n";
        // make a variable comparing the existing playlist songs array and the remove song array
            $playlistArrayAfterRemove = array_diff($this->songs, $removeThisSong);
            $stringPlaylist = implode(' ',$playlistArrayAfterRemove);
        echo "\n My playlist now after removing the above: \n" . $stringPlaylist . "\n";
       echo "\n show what is in playlist songs array now: \n"; 
       $this->songs = $playlistArrayAfterRemove;
       return $playlistArrayAfterRemove;
    }
    }
    }
}