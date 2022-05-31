
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=worksistemdb', 'root', '');
    //echo 'conectado';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>
<?php
/*
function conectar(){

    $pdo = null;
    $host = '127.0.0.1';
    $db = 'worksistemdb';
    $usuario = 'root';
    $pass = '';
    try {
        $pdo= new PDO('mysql:host=localhost;dbname=worksistemdb', 'root', '');
        echo "conectado correcctamente";
    }
    catch (PDOException $e){
        echo '<p> error se puede conectar</p>';
        exit;
    }
    return $pdo;
}*/
?>

