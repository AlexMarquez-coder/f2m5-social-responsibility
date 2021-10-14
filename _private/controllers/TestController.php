<?php

namespace Website\Controllers;

/**
 *  Undocumented class
 */
class TestController {

    public function queriesTesten() {
     
        //TODO: Alle topics ophalen
        // $topics = getAllTopics();
                   
        //TODO: Een nieuwe topic toevoegen
        // $title = "Depressie 3";
        // $description = "Alles over neerslachtige gevoelnes";
        // $result = addTopic($title, $description);
      
        //TODO: Topic aanpassen
        // $newTitle = 'Slaapprobleem :-(';
        // $newDescription = 'Nieuwe uitleg...';
        // $topicId = 6;     
        // $result updateTopic($topicId, $newTitle, $newDescription);
   
        //TODO: Topic verwijderen
        $topicToDelete = 18;
        $rowsDeleted = deleteTopic($topicToDelete);
        var_dump($rowsDeleted);

    }

    public function process() {
    
        
    }

}