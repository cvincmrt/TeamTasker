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

    abstract public function getWorkLink();
}