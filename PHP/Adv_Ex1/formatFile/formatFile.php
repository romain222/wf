<?php
namespace Adv_Ex1\formatFile;

use DateTime;

function formatFile($fileResource){
    
    $websites = json_decode($fileResource, true);
    $assembledData = [];
    
    foreach ($websites as $currentArrayElement) {
        $preferredName = $currentArrayElement['preferred'];
        $title = $currentArrayElement['versions'][$preferredName]['info']['title'];
        $description = '';
        if(empty($currentArrayElement['versions'][$preferredName]['info']['description']) == false){
            $description = $currentArrayElement['versions'][$preferredName]['info']['description'];
        }
        $createdEntry = $currentArrayElement['versions'][$preferredName]['added'];
        $update = $currentArrayElement['versions'][$preferredName]['updated'];
        
        $createdEntryDT = new DateTime($createdEntry);
        $updated = new DateTime($update);
        
        //$comma = ', ';
        
        //$currentString = '1.'.$title .$comma.
        //                 '2.'.$preferredName .$comma.
        //                 '3.'.$description .$comma.
        //                 '4.'.$createdEntryDT->format('d-m-Y H:i:s') .$comma.
        //                 '5.'.$updated->format('d-m-Y H:i:s') ."\n";
                            
        $currentData = [$title, $preferredName, $description, $createdEntryDT->format('d-m-Y H:i:s'), $updated->format('d-m-Y H:i:s')];
        
        array_push($assembledData, $currentData);
    }
    return $assembledData;
}

