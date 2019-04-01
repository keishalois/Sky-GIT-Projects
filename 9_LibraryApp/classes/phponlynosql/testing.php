<?php

include 'song.php';
include 'library.php';
include 'playlist.php';
include 'user.php';
include 'admin.php';
include 'people.php';

$myLibrary = new Library();
 //test new user set up
echo "\n create new customer\n";
$libraryUser1 = $myLibrary->createUser('Keisha', 'Hunt', 'keishahunt', 'passwordisbad');
$libraryUser2 = $myLibrary->createUser('Emma', 'Edgecombe', 'emmaedgecombe', 'passwooooord');
echo $libraryUser1 . "\n";
echo $libraryUser2 . "\n";

 //test new admin set up
echo "\n create new admin\n";
$libraryAdmin1 = $myLibrary->createAdmin('Cathy', 'Leeson', 'cathyleeson', 'terriblepassword');
$libraryAdmin2 = $myLibrary->createAdmin('Louise', 'Jones', 'louisejones', 'dntusethispsswrd');
echo $libraryAdmin1 . "\n";
echo $libraryAdmin2 . "\n";

//test creating songs
echo "\n create songs at library level - to go in database \n";
$mySong1 = $myLibrary->createSong('After Hours', 'We Are Scientists', 'Rock');
$mySong2 = $myLibrary->createSong('Hereafter', 'Architects', 'Metal');
$mySong3 = $myLibrary->createSong('The Middle', 'Jimmy Eat World', 'Rock');
$mySong4 = $myLibrary->createSong('Homesick', 'A Day to Remember', 'Pop Punk');
$mySong5 = $myLibrary->createSong('The Afterglow', 'Silverstein', 'Rock');
$mySong6 = $myLibrary->createSong('Thank U Next', 'Ariana Grande', 'Pop');
$mySong7 = $myLibrary->createSong('Paradise', 'George Ezra', 'Pop');
$mySong8 = $myLibrary->createSong('Waiting for Love', 'Avicci', 'Electronic Dance');
$mySong9 = $myLibrary->createSong('Better Now', 'Post Malone', 'Pop');
$mySong10 = $myLibrary->createSong('Bad Blood', 'Taylor Swift', 'Pop');
$mySong11 = $myLibrary->createSong('7 Rings', 'Ariana Grande', 'Pop');
$mySong12 = $myLibrary->createSong('Save it for the Bedroom', 'You Me at Six', 'Rock');
$mySong13 = $myLibrary->createSong('Take off your colours', 'You Me at Six', 'Rock');


//test creating playlists
echo "\n create playlists at library level - to go to database \n";

$myPlaylist = $myLibrary->createPlaylist('Awesome Rock Playlist', 'keishahunt');
// add songs to playlist on individual level based on playlist class methods
$myPlaylist->addSong($mySong1);
$myPlaylist->addSong($mySong2);
$myPlaylist->addSong($mySong3);
$myPlaylist->addSong($mySong4);
$myPlaylist->addSong($mySong5);

//created a second test playlist for Saul Goodman (breaking bad reference tho)
$SaulsPlaylist = $myLibrary->createPlaylist('Awesome Pop Playlist', 'emmaedgecombe');
$SaulsPlaylist->addSong($mySong6);
$SaulsPlaylist->addSong($mySong7);
$SaulsPlaylist->addSong($mySong8);
$SaulsPlaylist->addSong($mySong9);
$SaulsPlaylist->addSong($mySong10);

// test listing songs based on individual playlists - from playlist class methods
echo "\n list of songs in Keishas Awesome Rock Playlist \n";
$myPlaylist->listSongs();
echo "\n list of songs in Emmas Awesome Pop Playlist \n";
$SaulsPlaylist->listSongs();

//test getting a single playlist at library level
echo "\n two examples of searching for a playlist linked to a user \n";
echo $myPlaylistsearched = $myLibrary->getPlaylist('Awesome Rock Playlist', 'keishahunt');
echo $SaulsPlaylistsearched = $myLibrary->getPlaylist('Awesome Pop Playlist', 'emmaedgecombe');

//test searching by artist
echo "\n searching for songs by Ariana Grande \n";
echo $searchAriana = $myLibrary->getSongsbyArtist('Ariana Grande');
echo "\n searching for songs by George Ezra \n";
echo $searchGeorge = $myLibrary->getSongsbyArtist('George Ezra');

//test searching by genre
echo "\n searching for Electronic Dance songs \n";
echo $searchPop = $myLibrary->getSongsbyGenre('Electronic Dance');
echo "\n searching for Rock songs \n";
echo $searchRock = $myLibrary->getSongsbyGenre('Rock');

//test searching by songs
echo "\n searching for songs called Better Now \n";
echo $searchBetter = $myLibrary->getSongsbyTitle('Better Now');
echo "\n searching for songs Homesick \n";
echo $searchHomesick = $myLibrary->getSongsbyTitle('Homesick');

echo "Renaming playlist: \n";
echo "Original playlist name: \n";
echo $myPlaylist -> get('playlistName');
echo "\n";
echo "New playlist name: \n";
$myPlaylist -> set('playlistName', 'Hello Playlist' . "\n");
echo $myPlaylist -> __get('playlistName');

// test removing song from playlist
echo "\n remove Hereafter from Keishas playlist";
$myPlaylist->removeSong('Hereafter'); // shows song removed from playlist
$myPlaylist->listSongs(); // the remove song function doesn't stick as the song remains in the playlist

