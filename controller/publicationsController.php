<?php
require_once("../connection/Connection.php");

try {

   

    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores del formulario
        $text = $_POST['text'];
      
        $createDate = $_POST['createDate'];

        $userId = $pdo->query("SELECT userId FROM usuarios u inner join publications p WHERE u.id = p.userid")->fetchColumn();

        // Preparar la declaración de inserción
        $stmt = $pdo->prepare("INSERT INTO publications (id, userId, text, createDate) VALUES (null, :userId, :text, :createDate)");
        
        // Vincular los parámetros
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':createDate', $createDate);
        
        // Ejecutar la declaración de inserción
        $stmt->execute();

// insert into twitter.publications values(6,3,"si","2023-10-16");
       

        echo "Registro insertado correctamente.";
        header("Location: ../view/PublicationsView.php");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
