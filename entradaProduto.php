<?php
session_start();
require_once '/movimento/procedimentos.php';
require_once ('header.php');
?>
<div class="container">
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
    ?>
    <h4 class="text-center text-dark pt-2">Entrada de Produtos</h3>
        <form action="movimento/movimentoEntrada.php" method="Post">

            <!-- caixas de texto -->
			<div class="form-group">
                <label for="data">data</label>
                <input class="form-control" type="date" id="data" name="data">
            </div>
			<div class="form-group">
                <label for="produto">Produto</label>
                <input class="form-control" type="text" id="produto" name="produto" placeholder="Escolha o Produto">
            </div>
			<div class="form-group">
                <label for="codProduto">Cod Produto</label>
                <input class="form-control" readonly type="text" id="codProduto" name="codProduto" placeholder="Escolha o Produto">
            </div>
			<div class="form-group">
                <label for="valor">Valor</label>
                <input class="form-control" readonly type="text" id="valor" name="valor">
            </div>
            <div class="form-group">
                <label for="comprador">Contribuinte</label>
                <input class="form-control" type="text" id="comprador" name="comprador" placeholder="Escolha o Contribuinte">
            </div>
			<div class="form-group">
                <label for="codComprador">Cod Contribuinte</label>
                <input class="form-control" readonly type="text" id="codComprador" name="codComprador" placeholder="Escolha o Contribuinte">
            </div>
			
			<div class="form-group">
                <label for="codVendedor">Cod Vendedor</label>
                <input class="form-control" type="text" readonly id="codVendedor" name="codVendedor" value ="<?php echo $_SESSION['cod']; ?>">
            </div>
			<div class="form-group">
                <label for="vendedor">Vendedor</label>
                <input class="form-control" readonly type="text" id="vendedor" name="vendedor" value ="<?php echo $_SESSION['nome']; ?>">
            </div>
			
			<div class="form-group">
                <label for="nome">Quantidade</label>
                <input class="form-control"  type="text" id="quantidade" name="quantidade" placeholder="Digite o Quantidade">
            </div>
			
            <br>
            <input  class="btn btn-primary" name="salvar" type="submit" value="Salvar">
        </form>

</div>



<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/custom4.js"></script>
</body>
</php>