<?php include_once 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-2">
            <div class="block">
                <h2>Qual forma geométrica deseja representar?</h2>      
                <div class="block-items">
                    <div class="circle" id="1" onclick="escolha(this.id)"></div>
                    <div class="retan" id="2" onclick="escolha(this.id)"></div>
                    <div class="trape" id="3" onclick="escolha(this.id)"></div>
                </div>
                <button type="button" class="btn btn-primary" onclick="next()">Criar Objeto</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var id;
    function escolha(id_elemento) {
        id = document.getElementById(id_elemento).id;
        sessionStorage.setItem('fg', id);
    }
    function next() {
        location.assign('./dimensoes.php?v='+sessionStorage.getItem('fg'));
    }
</script>

<?php include_once 'footer.php'; ?>