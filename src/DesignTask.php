<?php
namespace App;

class DesignTask extends Task
{
    private string $figmaLink;

    public function __construct(string $title, string $description, int $priority, int $status, string $figmaLink){
        parent::__construct($title, $description, $priority, $status);
        $this->figmaLink = $figmaLink;
    }

    public function getWorkLink(){
        return "Figma:[link] ".$this->figmaLink;
    }

}