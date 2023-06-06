<?php
include('/Manyminds/application/views/header.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<body>
<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
					<h1 class="title has-text-white">Sistema de Cadastro de Clientes</h1>
					<?php
                    if($this->session->flashdata("msg") == TRUE):
                    ?>
                    <div class="notification is-info">
                    <button class="delete"></button>
                      <p>Usuário cadastrado com sucesso!</p>
                    </div>
                    <?php
                    endif;
                    ?>
                    <div class="box">
                        <h4 style="font-size: 20px; padding-bottom:30px;" class="has-text-black">Realize o seu login</h4>
                        <form action="<?= base_url() ?>login/store" method="POST">
                            <div class="field has-text-black">
                                <div class="control">
                                    <input name="inputLogin" type="text" oninvalid="this.setCustomValidity('Por favor, insira o seu login')"
                                    oninput="setCustomValidity('')" class="input is-large" required placeholder="Usuário*">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input id="inputSenha" name="inputSenha" type="password" oninvalid="this.setCustomValidity('Por favor, insira a sua senha')"
                                    oninput="setCustomValidity('')" class="input is-large" required placeholder="Senha*">
                                </div>
                            </div>
							<div class="field mt-4">
								<div class="control">
									<input type="checkbox" onclick="verSenha()"> Mostrar senha
								</div>
							</div>
                            <button type="submit" class="btn btn-save"><i class="fas fa-arrow-right"></i> Entrar</button>
                        </form>
                        <br/><a href="/usuario/novo" class="has-text-black"> Cadastrar-se</a>
                    </div>
					<a target="_blank" href="https://www.linkedin.com/in/alysson-quadros-2a72a9196/"><p class="mt-5 mb-3">&copy; 2023 - Alysson Quadros</p></a>
                </div>
            </div>
        </div>
        <script>

			function verSenha() {
				var senha = document.getElementById("inputSenha");
				if (senha.type === "password") {
					senha.type = "text";
				} else {
					senha.type = "password";
				}
			}

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
    </section>
</body>


</html>
