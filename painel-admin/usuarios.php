<?php
#pagina referencia para a chamada do botão se inserção
$pag = 'usuarios';

?>

<!-- Função de botão para cadastrar pode ser usado para adicionar só mudanr o nome-->
<a href="index.php?pagina=<?php echo $pag ?>&funcao=novo" type="button" 
class="btn btn-secondary mt-2">Novo Usuário</a>
<!-- Acrescentamos o fade na div class e acrescentamos o id -->
<div class="modal fade" tabindex="-1" id="modalCadastrar"
data-bs-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Inserir Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST">
        <div class="modal-body">
        
        <div class="row">
            <div class="col-md-6">
            <div class="mb3">
            <label for="nomeFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
            </div>
        </div>

            <div class="col-md-6">
            <div class="mb3">
            <label for="nomeFormControlInput1" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            </div>
        </div>  
    
        <div class="mb3">
            <label for="nomeFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>

         <div class="mb3">
            <label for="nomeFormControlInput1" class="form-label">Senha</label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>
        </div>
 
        <div class="mb3">
            <label for="nomeFormControlInput1" class="form-label">Nível</label>
                <select class="form-select mt-1" aria-label="Default select example" name="nivelCad">													
                    <option <?php if(@$nivel_ed == 'Operador'){ ?> selected <?php } ?>  value="Operador">Operador</option>
				    <option <?php if(@$nivel_ed == 'Administrador'){ ?> selected <?php } ?>  value="Administrador">Administrador</option>				
				    <option <?php if(@$nivel_ed == 'Vendedor'){ ?> selected <?php } ?>  value="Vendedor">Vendedor</option>
                    <option <?php if(@$nivel_ed == 'Tesoureiro'){ ?> selected <?php } ?>  value="Tesoureiro">Tesoureiro</option>
                </select>
            
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button name="btn-salvar" id="btn-salvar" type="button" class="btn btn-primary">Salvar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal statica para cadstrar -->
<?php
if(@$_GET['funcao'] == "novo") {?>
   <script>
    var myModal = new bootstrap.Modal(document.
        getElementById('modalCadastrar'), {
        backdrop: 'static'
    })
    myModal.show();
   </script> 
<?php }?>
 

</div>