<!DOCTYPE html>
<?php
//include the library class as it contains the methods to search
// pc users may have to rework the include statements until we figure out how mto do autoloading
include "/Applications/XAMPP/xamppfiles/htdocs/songlibrary2/classes/library.php";
include "/Applications/XAMPP/xamppfiles/htdocs/songlibrary2/classes/Playlist.php";

//check user session is active
session_start();
if(!empty($_SESSION)){
$username = $_SESSION["username"];
    if (isset($_SESSION["playlistname"])){
    $selectedplaylist= $_SESSION["playlistname"];
    $newPlaylist = new Playlist($selectedplaylist,$username);
}
}

//make a new library object to run the searches on
$searchsongs = new Library();
?>

<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- username displayed in tab to show who is logged in -->
	<title><? echo $username." "?> PlaybeforeyouPay</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/playbeforeyoupay.css">
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
        <script src ="javascript/librarysongs.js"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#"></i>Play before you Pay!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <form method="POST">
                <input type="text" placeholder="Searching for..." name="search" id="search">
                <input type="submit" value="Search" />
        </form>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hiya <? echo " " . $username ." "?> - My playlist(s)
        	</a>
       	 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       	 	<a class="dropdown-header">PlaylistPlaylistPlaylist</a>
       	   <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="userplaylist.php">View all playlists</a>
      	  </div>
      </li>      
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <!-- log out button logs the user out and redirects them to the landing page -->
          <a class="btn btn-default btn-lg" href='../Landingpage.php'>Logout <i class="fas fa-user"></i></a>
      </li>
    </ul> 
</div>
</nav>

<div class="container">
	<div class="row justify-content-md-center">
<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Artist</th>
            <th scope="col">Song</th>
            <th scope="col">Genre</th>
            <th scope="col">Save to playlist 
                <?php //this statement only shows if a playlist session is active and ready to have songs added
                if (isset($_SESSION["playlistname"])){echo " - " . $selectedplaylist;}?>
            </th>
          </tr>
        </thead>
        <tbody>
<br><br>
                        <?php   
    // this checks if a user has typed in the search bar - if not then it brings up all songs in database
                    if (!empty($_POST["search"])){
                    $search = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
                    $searchsongs->searchbyArtist($search);
                    $searchsongs->searchbyGenre($search);
                    } else {
                            $searchsongs->searchbyAll();
                            }
                  if (isset($_SESSION["playlistname"])&& (!empty($_POST["addsong"])))
                  {
                    $addsong = filter_var($_POST["addsong"], FILTER_SANITIZE_STRING);
                    $newPlaylist->addSongtoPlaylist($addsong);
                    } 
 
                        ?>
        </tbody>
        </table>
</div>
                        </div>
			</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</body>
</html>