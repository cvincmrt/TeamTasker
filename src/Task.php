<?php

namespace App;

abstract class Task
{
    protected int $id;
    protected string $title;
    protected string $description;
    protected int $priority;
    protected int $status;

    public function __construct(string $title, string $description, int $priority, int $status){
        $this->title = $title;
        $this->description = $description;
        $this->priority = $priority;
        $this->status = $status;
        
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }
    public function getPriority(){
        return $this->priority;
    }
    public function getStatus(){
        return $this->status;
    }

    abstract public function getWorkLink();
}