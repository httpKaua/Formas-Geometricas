<?php include_once 'Formas.class.php';
session_start();

if (isset($_POST['send'])) {
    $apelido = $_POST['ap'];
    $var = false;
    if (isset($_SESSION['fg']) == !null) {
        foreach ($_SESSION['fg'] as $key => $value) {
            if ($apelido == $value->a || $apelido == "") {
                $var = true;
                echo '<script>alert("Não foi possível criar esse objeto! Apelido inválido."); window.open(document.referrer,"_self");</script>';
                break;
            }
        }   
    }

    if ($var == false) {
        if ($_POST['id'] == 1) {
            $apelido = $_POST['ap'];
            $dia = $_POST['dia'];
    
            $figura = new Circulo($apelido, 'Círculo', $dia);
            $figura->calcularArea();    
        }
    
        if ($_POST['id'] == 2) {
            $base = $_POST['base'];
            $altura = $_POST['alt'];
    
            $figura = new Retangulo($apelido, 'Retângulo',$base, $altura);
            $figura->calcularArea();
        }
        
        if ($_POST['id'] == 3) {
            $basema = $_POST['Base'];
            $baseme = $_POST['base'];
            $altura = $_POST['alt'];
    
            $figura = new Trapezio($apelido, 'Trapézio',$basema, $baseme, $altura);
            $figura->calcularArea();
        }
    
        $_SESSION['fg'][] = $figura;
        $var = true;
        header("Location: ./exibir.php");
    }
}
?>



