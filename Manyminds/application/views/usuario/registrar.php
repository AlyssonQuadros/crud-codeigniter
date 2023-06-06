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
                    <h3 class="title has-text-white"> Cadastre-se no sistema</h3>
                    <div class="box">
                        <h4 style="font-size: 20px" class="has-text-black">Informe os seus dados</h4>
                        <h6 style="font-size: 12px; color:gray; padding-top:8px">(*) Campos obrigatórios</h6></br>
                        <form method="POST" action="/usuario/registrar">
                            <div class="field has-text-black">
                                <div class="control">
                                    <input name="nome" type="text" oninvalid="this.setCustomValidity('Por favor, informe um nome válido')"
                                    oninput="setCustomValidity('')" class="input is-large" required placeholder="Nome*">
                                </div>
                            </div>
							<div class="field has-text-black">
                                <div class="control">
                                    <input name="login" type="text" oninvalid="this.setCustomValidity('Por favor, informe um login válido')"
                                    oninput="setCustomValidity('')" class="input is-large" required placeholder="Login*">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input id="InputPassword" name="senha" type="password" oninvalid="this.setCustomValidity('Por favor, informe uma senha válida')"
                                    oninput="setCustomValidity('')" class="input is-large" required placeholder="Senha*">
                                </div>
                            </div>
							<div class="field mt-4">
								<div class="control">
									<input type="checkbox" onclick="verSenha()"> Mostrar senha
								</div>
							</div>
                            <button class="btn btn-save"><i class="fas fa-save"></i> Cadastrar</button>
                        </form>
                        <br/><a href="/index.php"><button class="button is-medium"><i class="fas fa-arrow-left" style="margin-right: 10px; font-size:16px"></i> Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <script>

			function verSenha() {
				var senha = document.getElementById("InputPassword");
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
