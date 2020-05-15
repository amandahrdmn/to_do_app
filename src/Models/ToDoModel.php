<?php


namespace App\Models;


use App\Interfaces\ModelInterface;

class ToDoModel implements ModelInterface
{
    private $db;

    /**
     * ToDoModel constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createToDo($entry) {
        $add_entry_query = $this->db->prepare("INSERT INTO `todo_entries` (`text`) VALUES (:text);");
        $entry_check = $add_entry_query->execute($entry);

        return $entry_check;
    }

    public function markToDoAsCompleted($entry) {
        $complete_entry_query = $this->db->prepare("UPDATE `todo_entries` 
                                        SET `completed` = 1
                                        WHERE `id` = ?;");
        $entry_check = $complete_entry_query->execute([$entry['id']]);
        return $entry_check;
    }

    public function markToDoAsDeleted($entry) {
        $complete_entry_query = $this->db->prepare("UPDATE `todo_entries` 
                                        SET `deleted` = 1
                                        WHERE `id` = ?;");
        $entry_check = $complete_entry_query->execute([$entry['id']]);
        return $entry_check;
    }

    public function getCompletedToDo() {
        $completed_entries_query = $this->db->prepare("SELECT `id`,`text` FROM `todo_entries` WHERE (`completed` = 1 && `deleted` = 0);");
        $completed_entries_query->execute();
        $completed_entries = $completed_entries_query->fetchAll();

        return $completed_entries;
    }

    public function getUncompletedToDo() {
        $uncompleted_entries_query = $this->db->prepare("SELECT `id`,`text` FROM `todo_entries` WHERE (`completed` = 0 && `deleted` = 0);");
        $uncompleted_entries_query->execute();
        $uncompleted_entries = $uncompleted_entries_query->fetchAll();

        return $uncompleted_entries;
    }
}