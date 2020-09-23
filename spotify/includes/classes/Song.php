<?php
class Song{
    private $con;
    private $id;
    private $mysqliData;
    private $title;
    private $artistId;
    private $albumId;
    private $genre;
    private $duration;
    private $path;

    public function __construct($con,$id){
        $this->con=$con;
        $this->id=$id;

        $query=mysqli_query($this->con,"SELECT * from Songs where id='$this->id'");
        $this->mysqliData=mysqli_fetch_array($query);
        $this->title=$this->mysqliData['title'];
        $this->artistId=$this->mysqliData['artistId'];
        $this->albumId=$this->mysqliData['albumId'];
        $this->genre=$this->mysqliData['genre'];
        $this->duration=$this->mysqliData['duration'];
        $this->path=$this->mysqliData['path'];

    }
    public function getTitle(){
        return $this->title;
    }
    public function artist(){
        return new Artist($this->con,$this->artistId);
    }
    public function getAlbum(){
        return new Album($this->con,$this->albumId);
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getDuration(){
        return $this->duration;
    }
    public function getPath(){
        return $this->path;
    }
    public function getMysqliData(){
        return $this->mysqliData;
    }
} 
?>
