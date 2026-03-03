<?php

namespace App;
use PDO;

class TaskRepository
{
    // class ktora ma na starosti len a len komunikaciu s databazou. Jedina class ktora bude vediet o tabulke tasks v databaze team_tasker 
    // ostatne casti aplikacie budu hovorit:repository daj mi vsetky ulohy, alebo zmaz tuto ulohu

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $tasks = [];
        $sql = "SELECT * FROM tasks ORDER BY priority DESC";
        $stmt = $this->db->query($sql);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $task = null;
            
            if($row["type"] === "DevTask"){
                $task = new DevTask($row["title"], $row["description"], (int)$row["priority"], (int)$row["status"], $row["meta_link"]);
            } elseif ($row["type"] === "DesignTask"){
                $task = new DesignTask($row["title"], $row["description"], (int)$row["priority"], (int)$row["status"], $row["meta_link"]);
            }
            
            if($task){
                $task->setId((int)$row["id"]);
                $tasks[] = $task;
            }
        }
        return $tasks;

    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = :id");
        return $stmt->execute([":id" => $id]);
    }
}