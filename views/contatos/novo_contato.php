
<h4>Novo contato</h4>
<hr/>
<?php if(isset($mensagem)){ ?>

    <div class="alert alert-success"> <?php echo $mensagem; ?> </div>

<?php } ?>

<form method="post" action="novo">


    <div class="form-group">
        <label for="email" class="cols-sm-2 control-label">Nome</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="nome" id="nome"  placeholder="Nome"/>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="email" class="cols-sm-2 control-label">Telefone</label>
        <div class="cols-sm-10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="telefone" id="telefone"  placeholder="Telefone"/>
            </div>
        </div>
    </div>
    
    <input type="submit" class="btn btn-primary btn-block" value="Adicionar contato"/>
</form>