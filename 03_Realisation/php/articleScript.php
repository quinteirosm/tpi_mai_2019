<?php

  class Article{

  public $titre;
  public $image;
  public $article;

    function __construct($titre, $image, $article){
      $this->titre=$titre;
      $this->image=$image;
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

    function setTitre($titre){
      return $this->titre = $titre;
    }
    function setImage($image){
      return $this->image = $image;
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

$article1 = new Article('asd', 'fgh', 'jkl');

function afficheArticle(){
  <<<HTML
    <h1>{this.getTitre()}</h1>
    <body><h1>{}</h1>
    </body>
    </html>
HTML;
}

afficheArticle($article1);
?>
