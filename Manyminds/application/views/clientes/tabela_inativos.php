<?php
include('/Manyminds/application/views/header.php');

?>
<!DOCTYPE html>
<html lang="pt-br">


    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="">
				<h3 class="title has-text-white"><i class="fa-solid fa-table"></i> Clientes <b style="color:#cc3535f3">inativos</b> cadastrados</h3>
                    <div class="box">
					<h4 style="font-size: 20px" class="has-text-black has-text-centered mb-4">Filtrar por:</h4>
					<div class="container has-text-centered mb-4">
						<a href="/clientes/tabela_ativos"><button id="btnSearch" class="btn btn-sm btn-secondary"> Ativos</button></a>
						<a href="/clientes/tabela_inativos"><button id="btnSearch" class="btn btn-sm btn-secondary"> Inativos</button></a>
					</div>
					<div class="table-responsive">
						<table class="table table-hover table-inverse">
							<thead>
								<tr>
									<th style="font-size:14px; text-align: center;">#</th>
									<th style="font-size:14px; text-align: center;">Nome</th>
									<th style="font-size:14px; text-align: center;">CPF</th>
									<th style="font-size:14px; text-align: center;">Nasc.</th>
									<th style="font-size:14px; text-align: center;">Cidade</th>
									<th style="font-size:14px; text-align: center;">Estado</th>
									<th style="font-size:14px; text-align: center;">Rua</th>
									<th style="font-size:14px; text-align: center;">Num.</th>
									<th style="font-size:14px; text-align: center;">CEP</th>
									<th style="font-size:14px; text-align: center;">Telefone</th>
									<th style="font-size:14px; text-align: center;">Data</th>
									<th style="font-size:14px; text-align: center;">Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($clientes as $cliente) : ?>
									<tr>
										<td style="font-size:14px; text-align: center;"><?= $cliente['id_cliente'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['nome'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['cpf'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['data_nasc'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['cidade'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['estado'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['rua'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['num'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['cep'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['telefone'] ?></td>
										<td style="font-size:14px; text-align: center;"><?= $cliente['data_cadastro'] ?></td>
										<td>
											<div class="level">
												<div class="level-item">
													<div class="field">
														<a href="javascript:goAtivo('<?= $cliente['id_cliente'] ?>')">
															<button style="font-size:12px;" id="btnAtivar" type="button">
															<i class="fa-solid fa-plus"></i></button>
														</a>
													</div>
												</div>
											</div>
										</td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
                        <div class="has-text-centered">
                            <br/><a href="/menu"><button class="button is-medium"><i class="fas fa-arrow-left" style="margin-right: 10px; font-size:16px"></i> Voltar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<script>
		function goAtivo(id_cliente){
			var myUrl = 'ativar/'+id_cliente
			console.log('teste')
			if(confirm("Deseja ativar esse cliente?")){
				window.location.href = myUrl;
			} else {
				alert("Cliente não alterado");
				return false;
			}
		}

		document.addEventListener('DOMContentLoaded', () => {
		(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
			const $notification = $delete.parentNode;

			$delete.addEventListener('click', () => {
			$notification.parentNode.removeChild($notification);
			});
		});
		});
	</script>
    </body>
</html>
