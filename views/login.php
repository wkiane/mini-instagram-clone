<div class="container mt-5">
    <h2 class="mb-4">Logar</h2>
    <form action="<?= BASE_URL; ?>/login" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="E-mail">        
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha">            
        </div>
        <input type="submit" name="enviar" value="Entrar" class="btn btn-primary float-left">
        <a href="<?= BASE_URL; ?>/register" class="btn btn-secondary float-right">Criar conta</a>
    </form>
</div>