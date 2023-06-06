<?php
include('/Manyminds/application/views/header.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
	<section class="hero is-success is-fullheight" style="padding: 60px;">
	<div class="container has-text-centered">
		<div class="columns is-centered">
			<div class="column is-half">
				<h3 class="title has-text-white"><i class="fa fa-user-plus"></i> Cadastre um cliente</h3>
				<?php
				if($this->session->flashdata("msg") == TRUE):
				?>
				<div class="notification is-success">
				<button class="delete"></button>
					<p>Cliente cadastrado com sucesso!</p>
				</div>
				<?php
				endif;
				?>
				<div class="box">
					<h4 style="font-size: 20px" class="has-text-black">Informe os dados do cliente:</h4>
					<h6 style="font-size: 12px; color:gray; padding-top:8px">(*) Campos obrigatórios</h6></br>
					<?php if(isset($cliente)) : ?>
						<form action="/clientes/update/<?= $cliente['id_cliente'] ?>" method="POST">
					<?php else : ?>
						<form action="/clientes/store" method="POST">
					<?php endif; ?>
							<div class="field" style="padding:7px;">
								<div class="control">
									<input name="nome" type="text" oninvalid="this.setCustomValidity('Por favor, entre com um nome e sobrenome')"
									oninput="setCustomValidity('')" class="input is-large" required placeholder="Nome*"
									value="<?= isset($cliente) ? $cliente['nome'] : "" ?>"
									>
								</div>
							</div>
							<!-- Primeiro level -->
							<div class="level">
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input oninput="mascara(this)" name="cpf" type="text" minlength="14"
											class="input is-large" required placeholder="CPF*"
											value="<?= isset($cliente) ? $cliente['cpf'] : "" ?>"
											>
										</div>
									</div>
								</div>
								<div class="level-item">
									<div class="field" >
										<div class="control">
											<input name="data_nasc" type="text" onfocus="(this.type='date')" oninvalid="this.setCustomValidity('Por favor, informe um endereço válido')"
											oninput="setCustomValidity('')" class="input is-large textbox-n" required placeholder="Data de nascimento*"
											value="<?= isset($cliente) ? $cliente['data_nasc'] : "" ?>"
											>
										</div>
									</div>
								</div>
							</div>
							<!-- Segundo level -->
							<div class="level">
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input name="cidade" type="text" class="input is-large" placeholder="Cidade"
											value="<?= isset($cliente) ? $cliente['cidade'] : "" ?>"
											>
										</div>
									</div>
								</div>
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input name="estado" type="text" class="input is-large" placeholder="Estado"
											value="<?= isset($cliente) ? $cliente['estado'] : "" ?>"
											>
										</div>
									</div>
								</div>
							</div>
							<!-- Terceiro level -->
							<div class="level">
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input name="rua" type="text" class="input is-large" placeholder="Rua"
											value="<?= isset($cliente) ? $cliente['rua'] : "" ?>"
											>
										</div>
									</div>
								</div>
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input name="num" type="text" class="input is-large" placeholder="Número"
											value="<?= isset($cliente) ? $cliente['num'] : "" ?>"
											>
										</div>
									</div>
								</div>
							</div>
							<!-- Quarto level -->
							<div class="level">
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input name="cep" type="text" class="input is-large" placeholder="CEP"
											value="<?= isset($cliente) ? $cliente['cep'] : "" ?>"
											>
										</div>
									</div>
								</div>
								<div class="level-item">
									<div class="field">
										<div class="control">
											<input type="telefone" maxlength="15" onkeyup="handlePhone(event)" name="telefone" class="input is-large" placeholder="Telefone"
											value="<?= isset($cliente) ? $cliente['telefone'] : "" ?>"
											>
										</div>
									</div>
								</div>
							</div>
						<button type="submit" class="btn btn-save"><i class="fas fa-save"></i> Salvar</button>
					</form>
					<?php if(isset($cliente)) : ?>
						<br/><a href="/clientes/tabela_ativos"><button class="button is-medium"><i class="fas fa-arrow-left" style="margin-right: 10px; font-size:16px"></i> Voltar</button></a>
					<?php else : ?>
						<br/><a href="/menu"><button class="button is-medium"><i class="fas fa-arrow-left" style="margin-right: 10px; font-size:16px"></i> Voltar</button></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	</section>
	<script>
		function mascara(i){

			var v = i.value;

			if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
			i.value = v.substring(0, v.length-1);
			return;
			}

			i.setAttribute("maxlength", "14");
			if (v.length == 3 || v.length == 7) i.value += ".";
			if (v.length == 11) i.value += "-";

		}

		const handlePhone = (event) => {
		let input = event.target
		input.value = phoneMask(input.value)
		}

		const phoneMask = (value) => {
		if (!value) return ""
		value = value.replace(/\D/g,'')
		value = value.replace(/(\d{2})(\d)/,"($1) $2")
		value = value.replace(/(\d)(\d{4})$/,"$1-$2")
		return value
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
