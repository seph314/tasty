<?php
/**
 * Models a comment
 */

namespace Model;

class Comment {
    private $id;
    private $name;
    private $comment;
    private $dish;
    private $time;

    /**
     * Comment constructor.
     * @param $id
     * @param $name
     * @param $comment
     * @param $dish
     * @param $time
     */
    public function __construct($id, $name, $comment, $dish, $time) {
        $this->id = $id;
        $this->name = $name;
        $this->comment = $comment;
        $this->dish = $dish;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment) {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getDish() {
        return $this->dish;
    }

    /**
     * @param mixed $dish
     */
    public function setDish($dish) {
        $this->dish = $dish;
    }

    /**
     * @return mixed
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time) {
        $this->time = $time;
    }
}