<?php include 'header.php'; ?>

	<main role="main" class="page_forgotpass">
		<section class="block_wpr block-01">
			<div class="block_cntt">
				<h3 class="page_subtitle">Esqueci</h3>
				<p class="info">Falhou a memória? Sem preocupações, reaver a sua senha será super simples: digite no campo de texto abaixo o e-mail que utilizou para se cadastrar no PMV e clique no botão "Redefinir senha". Enviaremos um link para o seu e-mail!</p>

				<form>
					<div class="form_div">
						<input type="text" class="txt" name="email" placeholder="e-mail de cadastro" />
						<input type="button" name="button" value="Redefinir Senha" class="btn" />
						
						<div class="msg_wpr">
							<!-- -BRS- Mensagens de erro e sucesso. Adicionar classe 'active' para tornar visivel -->
							<p class="msg error">Ops, Não conseguimos achar o seu registro com este e-mail no nosso sistemas.</p>
							<p class="msg success">Certo, Enviamos uma mensagem para este seu e-mal.</p>
						</div>

					</div>
				</form>
				<p class="info">Ah! É interessante verificar se nossa mensagem não caiu por acaso na caixa de spans ou foi filtrada por outros mecanismos do seu e-mail. Caso ainda não tenha recebido nada, espere até 10min para verificar sa caixa de entrada novamente. Tendo qualquer problema, evnie-nos um e-mail (<a href="mailto:cadastro@perdimeuvoo.com.br">cadastro@perdimeuvoo.com.br</a>). <!-- -BRS- Mudar e-mail -->
				</p>
			</section>
		</div>
		<div class="section_separation"></div>

	</main>

<?php include 'footer.php'; ?>
