<?php

    require ("main.class.php");
    class DisplayDataImageProfile {
    function showImageProfile(){
        $connection = new Connection();
        $conn = $connection->getConnection();

        $id = $_GET['id'];

        try{
            $sqlDisplay = "SELECT photo FROM frofile WHERE id =$id";
            $getImage = $conn->prepare($sqlDisplay);
            $getImage->execute();
            $getImage->fetchAll(PDO::FETCH_ASSOC);

            foreach($getImage as $data){
                header('Content-type: image/jpg');
                // echo "<img src='$data'>";
                echo $data;
            }

        }catch (PDOException $e){
            echo "Error : " + $e->getMessage();
        }
    }
}


?>