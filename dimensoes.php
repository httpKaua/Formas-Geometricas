<?php include_once 'header.php';
include_once 'Formas.class.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-2">
            <div class="block">
                <?php if ($_GET['v'] == 1) { ?>
                    <h2>Defina os paramêtros - Círculo</h2>
                    <div class="block-items">
                        <form action="salvar_fg.php" method="post">
                            <div class="input-group md-4">
                                <span class="input-group-text">Apelido</span>
                                <input type="text" class="form-control" name="ap" id="ap" placeholder="C1">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Diâmetro</span>
                                <input type="number" class="form-control" name="dia" id="dia" value="0">
                            </div>
                            <input type="hidden" name="id" value="1">
                <?php } ?>
                <?php if ($_GET['v'] == 2) { ?>
                    <h2>Defina os paramêtros - Retângulo</h2>
                    <div class="block-items">
                        <form action="salvar_fg.php" method="post">
                            <div class="input-group md-4">
                                <span class="input-group-text">Apelido</span>
                                <input type="text" class="form-control" name="ap" id="ap" placeholder="R1">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Base</span>
                                <input type="number" class="form-control" name="base" id="base" value="0">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Altura</span>
                                <input type="number" class="form-control" name="alt" id="alt" value="0">
                            </div>
                            <input type="hidden" name="id" value="2">
                <?php } ?>
                <?php if ($_GET['v'] == 3) { ?>
                    <h2>Defina os paramêtros - Trapézio</h2>
                    <div class="block-items">
                        <form action="salvar_fg.php" method="post">
                            <div class="input-group md-4">
                                <span class="input-group-text">Apelido</span>
                                <input type="text" class="form-control" name="ap" id="ap" placeholder="T1">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Base Maior</span>
                                <input type="number" class="form-control" name="Base" id="Base" value="0">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Base Menor</span>
                                <input type="number" class="form-control" name="base" id="base" value="0">
                            </div>
                            <br>
                            <div class="input-group md-4">
                                <span class="input-group-text">Altura</span>
                                <input type="number" class="form-control" name="alt" id="alt" value="0">
                            </div>
                            <input type="hidden" name="id" value="3">
                    <?php } ?>
                            <input type="submit" value="Salvar" class="btn btn-primary" name="send">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>




        <?php include_once 'footer.php'; ?>