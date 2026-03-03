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

        while($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){
            $tasks = null;

            if($row["type"] === "DevTask"){
                $task = new DevTask();
            }

        }

    }
}