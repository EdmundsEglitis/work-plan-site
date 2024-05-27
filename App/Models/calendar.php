<?php

require_once "../app/Core/Database.php";

class calendarModel {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function calendarGetTasks(int $UserId) {
        $query = $this->db->dbconn->prepare("SELECT * FROM Tasks WHERE UserID = ?");
        $query->execute($UserId);
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