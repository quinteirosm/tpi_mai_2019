<?php

  class articles{

  public $h1;
  public $img;
  public $article;

    function __construct($h1, $img, $article){
      $this->titre=$h1;
      $this->image=$img;
      $this->article=$article;
    }

    function getTitre(){
      return $this->titre;
    }
    function getImage(){
      return $this->image;
    }
    function getArticle(){
      return $this->article;
    }

    function setTitre($h1){
      return $this->titre = $h1;
    }
    function setImage($img){
      return $this->image = $img;
    }
    function setArticle($article){
      return $this->article = $article;
    }

    function affichage(){
      echo $this->getTitre();
      echo $this->getImage();
      echo $this->getArticle();
    }
}

$article1 = new articles('asd', 'fgh', 'jkl');

?>
