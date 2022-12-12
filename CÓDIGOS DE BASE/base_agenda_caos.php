<?php
    require_once 'conecta.php';

    if(isset($_GET['btnagenda'])){
        $evento = filter_input(INPUT_GET,'codevento');
        $data = fliter_input(INPUT_GET, 'dataevento');
        $comprador = fliter_input(INPUT_GET, 'codcomprador');

        $sql = $conecta->prepare("INSERT into tab_eventos (ev_id, ev_data, ev_cp) VALUES (:id, :data, :cid)");
        $sql->bindValue(':id',$evento);
        $sql->bindValue(':data',$data);
        $sql->bindValue(':cid',$comprador);

        $sql->execute();
        header('Location: confirm.php');
    }