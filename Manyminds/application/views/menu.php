<?php
include('/Manyminds/application/views/header.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body has-text-centered">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-white">Sistema de Cadastro de <b style="color:#202eadf3">Clientes</b> </h3>
                    <div class="box has-text-centered" style="box-shadow: 15px 15px; color:#2a98ff">
                        <a href="/clientes/novo"><button class="btn btn-primary"><i class="fa fa-user-plus"></i> Cadastrar Cliente</button></a>
                        <div>
                        <a href="/clientes/tabela_ativos"><button class="btn btn-primary"><i class="fa-solid fa-table"></i> Clientes cadastrados</button></a> <br/><br/>
                        <br/><a class="has-text-black" href="<?= base_url() ?>login/logOut"> Sair</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
