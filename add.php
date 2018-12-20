<?php
$true = $false = '';
$san2 = file_get_contents('todo.json');
$json = json_decode($san2,true);


//ARCHIVE
if($json) {
    foreach ($json as $key => $value) {
        if(isset($_POST['all'])) {
            foreach ($_POST['all'] as $key2 => $value2) {
                if($value2 == $value['id']) {
                    $json[$key]['etat'] = false;
                    $jsonData = json_encode($json, true);
                    file_put_contents('todo.json', $jsonData);
                }
            }
        }
    }

    $san3 = file_get_contents('todo.json');
    $json2 = json_decode($san3,true);

    foreach($json2 as $key3 =>$value3) {
        if($value3['etat']==true){
            $true .= '<input type=checkbox name=all[] value =' . $value3['id'] . '>' . '<label>' . '' . $value3['name'] . '</label><br>';
        
        } else if ($value3['etat']==false){
            $false .= '<input type=checkbox   name=all[] checked  value =' . $value3['id'] . '>' . '<label><s>' . '' . $value3['name'] . '</s></label><br>';

        }

    }
//A FAIRE
} else {
    $true .= 'Veuillez ajouter une tâche.';
}




?>