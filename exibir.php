<?php
include_once 'header.php';
include_once 'Formas.class.php';
session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-2">
            <div class="block-3">
                <h2 style="margin-top: 3%;">Lista de objetos criados</h2>
                <?php if (!empty($_SESSION['fg'])) { ?>
                    <table class="table table-hover" style="margin-top: 3%;">
                        <thead class="table" style="background: lightblue;">
                            <tr>
                                <th scope="col">Tipo</th>
                                <th scope="col">Apelido</th>
                                <th scope="col">Área (cm²)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($_SESSION['fg'] as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value->a?></td>
                                    <td><?php echo $value->tipo;?></td>
                                    <td><?php echo $value->area;?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
                <a href="./index.php" class="btn btn-primary" style="margin-bottom: 5vh;">Criar novo objeto</a>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>