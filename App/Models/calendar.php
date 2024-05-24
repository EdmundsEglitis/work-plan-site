<?php

require_once "../app/Core/Database.php";

class calendarModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function calendarGetTasks() {
        $query = $this->db->dbconn->prepare("SELECT * FROM Tasks");
        $query->execute();
        $tasks = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $calendar = [];
    
        foreach ($tasks as $task) {
            $deadline = $task['Deadline'];
            if (!isset($calendar[$deadline])) {
                $calendar[$deadline] = [];
            }
            $calendar[$deadline][] = $task;
        }
    
        return $calendar;
    }
    
}