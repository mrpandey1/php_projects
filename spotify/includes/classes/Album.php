<?php
class Album{
    private $con;
    private $id;
    private $title;
    private $artistId;
    private $artworkPath;
    private $genre;
    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;

        $query=mysqli_query($this->con,"SELECT * from albums where id='$this->id'");
        $album=mysqli_fetch_array($query);
        $this->title=$album['title'];
        $this->artistId=$album['artist'];
        $this->artworkPath=$album['artworkPath'];
        $this->genre=$album['genre'];
    }
    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getArtist(){
        return new Artist($this->con,$this->artistId);
    }
    public function getArtworkPath(){
        return $this->artworkPath;
    }
}
?>
