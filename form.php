<?php include 'header.php'; ?>

	<main role="main" class="page_form">
		<section class="block_wpr block-01">
			<div class="block_cntt">
				<div class="title_wpr">
					<h2 class="page_title">Ocorrência</h2>
					<h3 class="page_subtitle">Apenas algumas informações necessárias</h3>
				</div>
				<div class="block_txt">
					<p class="form_top"></p>
					<form>
						<ul class="form_slide_wpr">
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Qual o seu nome?</p>
									<input type="text" name="name" class="txt" />
								</div>
								<p class="msg error">Ops, um erro.</p>
								<p class="msg success">Certo, aqui tudo OK.</p>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Agora uma pergunta com Select.</p>
									<select class="select">
										<option>Uma opção com o nome bem grande</option>
										<option>Opção 01</option>
										<option>Opção 02</option>
										<option>Opção 03</option>
									</select>
								</div>
							</li>							
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Qual foi a data pra gente testar esse calendário?</p>
									<input type="text" name="calendar" class="calendar">
								</div>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">E um exemplo de texto fixo antes e depois do input.text?</p>
									<div class="input_wpr">
										<span class="input_pre">R$</span>
										<input type="text" name="calendar" class="calendar">
										<span class="input_pos">,00</span>
									</div>
								</div>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Outra opção com radiobutton</p>
										<ul class="radiobutton_list">
											<li><input type="radio" name="radio"><label>Sim</label></li>
											<li><input type="radio" name="radio"><label>Não</label></li>
											<li><input type="radio" name="radio"><label>Não faço ideia!</label></li>
										</ul>
								</div>
							</li>							
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Então me diga mais:</p>
									<textarea class="text"></textarea>
								</div>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Quase finalizando, um checkbox e simulando uma pergunta cheia de palavras bacanas e com um tamanho moderadamente grande.</p>
										<ul class="checkbox_list">
											<li><input type="checkbox" name="radio"><label>Bagagem</label></li>
											<li><input type="checkbox" name="radio"><label>Passagem</label></li>
											<li><input type="checkbox" name="radio"><label>Atraso</label></li>
											<li><input type="checkbox" name="radio"><label>Família</label></li>
											<li><input type="checkbox" name="radio"><label>Chewbacca</label></li>
										</ul>
								</div>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Confirme seus dados!</p>
									<div class="form_confirmation">
										<ul class="info_list">
											<li><strong>Nome</strong> Fulano de Substantivos 
											sem Necessidade no Nome</li>
											<li><strong>Data</strong> 04/10/2015</li>
											<li><strong>Local</strong> Brasília / DF</li>
											<li><strong>E o texto a mais</strong> É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível. Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção. Várias versões novas surgiram ao longo dos anos, eventualmente por acidente, e às vezes de propósito (injetando humor, e coisas do gênero).</li>
										</ul>
									</div>
									<p class="obs">Ao clicar no botão "confirmar!" abaixo, você está concordando com os nossos <a href="#">termos de política e privacidade</a>.</p>
									<input type="button" name="button" value="Confirmar!" class="btn" />
								</div>
							</li>
							<li class="form_slide">
								<div class="form_div">
									<p class="question">Pronto! O cadastro da ocorrência foi efetuado com sucesso. Estes aqui são os seus dados para consultar o andamento do processo.</p>
									<p class="obs">Antes de fechar esta página, confirme se recebeu estes dados em seu e-mail.</p>
								</div>
							</li>

						</ul>
					</form>
				</div>
				<span class="clear"></span>
			</div>
		</section>

	</main>
		<div class="section_separation"></div>

<?php include 'footer.php'; ?>
