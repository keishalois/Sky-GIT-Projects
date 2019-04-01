<?php

include_once "/Applications/XAMPP/xamppfiles/htdocs/songlibrary2/classes/connector.php";
class Playlist {
    // assign attributes to playlist and only construct name and user
    //we add songs in later once the playlist has been created
    use Connector;
    private $playlistName;
    private $playlistUser;
    
    public function __construct($playlistName, $playlistUser){
        $this->playlistName = $playlistName;
        $this->playlistUser = $playlistUser;
    } 
    
    //function to create a new user playlist and add it to the database associating it with the current user
    public function createPlaylist() {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //the sql statement below inserts values to playlist to user 
        // using the select UserID from Users to add the playlist for the current user
        $sql = "INSERT INTO playlist_to_user (PlaylistName, PlaylistOwnerID, CreationDate, ExpiryDate, DaysLeft) "
                . "VALUES (:playlistname, "
                . "(SELECT UserID from users WHERE Username = :user),  "
                . "CURRENT_DATE, "
                . "ADDDATE(CURRENT_DATE, 10), "
                . "10)"
                    ;
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['playlistname'=> $this->playlistName, 'user'=> $this->playlistUser]);
                }

        catch (PDOException $e) {
            $error = $e->errorInfo();
            die("Adding playlist failed sorry ..." . $error . $e->getMessage());
        }
        unset($stmt);
    }
    
    // this function creates a playlist session on user page to allow songs to be added to newly created playlist
    public function logPlaylist() {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT playlist_to_user.PlaylistName, Username FROM playlist_to_user 
                JOIN users as playlist_user
                    ON playlist_to_user.PlaylistOwnerID = UserID
                WHERE PlaylistOwnerID LIKE (SELECT UserID from users WHERE Username = :user)
                AND PlaylistName = :playlistname";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['playlistname'=> $this->playlistName, 'user'=> $this->playlistUser]);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $_SESSION["playlistname"]=$row["PlaylistName"];
            header("Location:userpage.php");}  
        } catch (PDOException $e) {
            $error = $e->errorInfo();
            die("Playlist capture failed sorry ..." . $error . $e->getMessage());
        }
        unset($stmt);
    }
    
        public function addSongtoPlaylist($song) {
        $pdo = $this->connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO song_to_playlist (SongID, PlaylistID) "
                . "VALUES ((SELECT SongID from songs WHERE SongName = :song), "
                . "(SELECT PlaylistID from playlist_to_user WHERE PlaylistName = :playlistname AND PlaylistOwnerID LIKE (SELECT UserID from users WHERE Username = :user)))";
                try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['song' => "%".$song."%" ,'playlistname'=> $this->playlistName, 'user'=> $this->playlistUser]);
        } catch (PDOException $e) {
            $error = $e->errorInfo();
            die("Song added failed sorry ..." . $error . $e->getMessage());
        }
        unset($stmt);
    }
    
    
        public function set($playlistName, $value){
        $this->$playlistName = $value;
    }
    
    // to allow the get playlist function in library class access,
    // need to get playlist name - for being able to change the playlist name (and set above)
    public function get($playlistName){
        return $this->$playlistName;
    }
    

}

