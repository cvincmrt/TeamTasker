<?php
namespace App;

class DevTask extends Task
{
    private string $gitHubRepo;

    public function __construct(string $title, string $description, int $priority, int $status, string $gitHubRepo){
        parent::__construct($title, $description, $priority, $status);
        $this->gitHubRepo = $gitHubRepo;
    }

    public function getWorkLink(){
        return "Github:[link] ".$this->gitHubRepo;
    }

}