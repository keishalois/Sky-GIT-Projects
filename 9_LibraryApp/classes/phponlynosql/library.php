<?php


class Library {
//relevant attributes at the library level that we would want to see/search through   
    private $playlists;
    private $genres;
    private $artists;
    private $songs;
    private $customers;
    private $admins;
    
//construct arrays of the attributes at library level to keep a full list   
    public function __construct(){
        $this->playlists = array();
        $this->genres = array();
        $this->artists = array();
        $this->songs = array();
        $this->users = array();
        $this->admins = array();
    } 
// function to give ability to add playlist at the library level and add it to the list of all playlists in the library      
    public function createPlaylist($name, $user) {
        $playlist = new Playlist($name, $user);
        array_push($this->playlists, $playlist);
        return $playlist;   
    }
    
// function to add songs at the library level
    public function createSong($title, $artist, $genre) {
        $song = new Song($title, $artist, $genre);
        array_push($this->songs, $song);   //---- do we also want to push these to artists and genres?
        echo $song; // this is here just to check what the song details are in tests - echo not really required
        return $song;   
    }
      
// function to add users to the library level
    public function createCustomer($firstName, $lastName, $username, $password) {
    	$customer = new Customer($firstName, $lastName, $username, $password);
        array_push($this->customers, $customer);
     	return $customer;
        }
// function to add admins to the library level
    public function createAdmin($firstName, $lastName, $username, $password) {
    	$admin = new Admin($firstName, $lastName, $username, $password);
        array_push($this->admins, $admin);
     	return $admin;
        }       

// function to search for a specific playlist owned by a specific user at the library level    
    public function getPlaylist($name, $user) {
        // Create null playlist
        $playlist = null;
        // Loop through the library playlist array
        foreach ($this->playlists as $value) {
        // Check the value of the current items properties in the array to see if they match the $name and $user
            if ($value->playlistName == $name && $value->playlistUser == $user){
                // if they match, assign $playlist to the $value
                $playlist = $value;
                // break out of the loop
                break;
            }
        }
        // Return $playlist, either null or equal to $value
        return $playlist;
    }
         
// function to search by artist at the library level ---- not entirely sure if this is a good way to do this but it works 
    public function getSongsbyArtist($artist) {
        // create null artist
        $searchArtist[] = null;
        // Loop through the songs array
        foreach ($this->songs as $value) {
        // Check the value of the current items properties in the array to see if they match the artist we are looking for
            if($value->artist == $artist){
        //if the artist does match the one we are looking for, push it to the search artist array and echo values
                array_push($searchArtist, $value);
                echo $value . "\n";
        }
        }
        //return print_r($searchArtist);
    }
        
// function to search by genre at the library level ---- not entirely sure if this is a good way to do this but it works 
    public function getSongsbyGenre($genre) {
        // create null genre
        $searchGenre[] = null;
        // Loop through the genre array
        foreach ($this->songs as $value) {
            // Check the value of the current items properties in the array to see if they match the genre we are looking for
            if($value->genre == $genre){
            //if the genre does match the one we are looking for, push it to the search genre array and echo values
                array_push($searchGenre, $value);
        echo $value . "\n";
        }
    }
           // return print_r($searchGenre);
    }
}