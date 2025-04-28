<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="util\bootstrap\js\bootstrap.min.js"></script>
</head>
<body>
  
    <?php 
        require_once 'controllers/UsuarioController.php';

        $usuario = new UsuarioController();

        $action = $_GET['action'] ?? "index";
        $id = $_GET['id'] ?? null;

        switch($action) {
            case "index":
                $usuario->index();
                break;
            case "editar":
                $usuario->editar($id);
                break;
        }

        //$usuario->index();
    ?>
</body>
</html>