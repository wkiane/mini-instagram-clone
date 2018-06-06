<div class="container mt-5">
    <h2 class="mb-4">Criar conta</h2>
    <form action="<?= BASE_URL; ?>/register" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail">        
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="email2" placeholder="Confirmar e-mail">        
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha">            
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="senha2" placeholder="Comfirmar Senha">            
        </div>

        <input type="submit" name="enviar" value="Criar conta" class="btn btn-primary float-left">
        <a href="<?= BASE_URL; ?>/login" class="btn btn-secondary float-right">Logar</a>
    </form>
</div>