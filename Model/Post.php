<?php

namespace Model;
/**
 * Created by PhpStorm.
 * User: shtoorman
 * Date: 03.02.17
 * Time: 20:26
 */
abstract class Post
{
    private $title;
    private $content;
    private $author;



    public function __construct(array $list)
    {
        while (list($key, $val) = each($list)) {
            $this->$key = $val;
        }
    }

    public function getTile(){
        return $this->title;
    }

    public function getContent(){
        return $this->title;
    }

    public function getAutor(){
        return $this->title;
    }

    public function __toString()
    {
        echo 'title'.$this->getTile();
        echo 'content'.$this->getContent();
        echo 'autor'.$this->getAutor();
    }
}