<?php include("db.php");
if (isset($_POST['save_task'])){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $asunto=$_POST['asunto'];
    $telefono=$_POST['telefono'];
    $comentario=$_POST['comentario'];
    /*
    echo $nombre;
    echo $email;
    echo $asunto;
    echo $telefono;
    echo $comentario;
*/
    $query = "INSERT INTO contacto(asunto, comentarios,email,nombre,telefono) VALUES ('$asunto', '$comentario', '$email', '$nombre', '$telefono')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
    die("Query Failed.");
    }

    $_SESSION['message'] = 'Task Saved  ';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');

}
?>