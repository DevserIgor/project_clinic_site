    <?php 
        require 'topo.php';
    ?>

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 id="pagina_titulo">Exames</h1>
                    <a href="index.php">Início</a> <span>|</span> <a href="exames.php">Exames</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <br><br>
	
	<!-- start section -->

	<div class="whole-wrap">
		<div class="container">
			<div class="row">	

				<!-- moblie -->
				<div class="col-sm-12 div_seletor_exames_mobile mb-30">
					<div class="default-select " id="seletor_exames">						
						<select style="" class="genric-btn info-border select_exames" onchange="exibe_exame(this.value)">

							<option value='acuidade_visual'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ACUIDADE VISUAL</p></div></option>
							<option value='audiometria'><div class="switch-wrap d-flex justify-content-between pointer" ><p>AUDIOMETRIA</p></div></option>
							<option value='curva_tensional'><div class="switch-wrap d-flex justify-content-between pointer" ><p>CURVA TENSIONAL</p></div></option>
							<option value='doppler_vascular_periferico'><div class="switch-wrap d-flex justify-content-between pointer" ><p>DOPPLER VASCULAR PERIFÉRICO</p></div></option>
							<option value='dopplerfluxometria_obstetrica'><div class="switch-wrap d-flex justify-content-between pointer" ><p>DOPPLERFLUXOMETRIA OBSTÉTRICA</p></div></option>
							<option value='ecocardiograma'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ECOCARDIOGRAMA</p></div></option>
							<option value='ecocardiograma_sob'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ECOCARDIOGRAMA <small>SOB STRESS</small></p></div></option>
							<option value='eletrocardiograma'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ELETROCARDIOGRAMA</p></div></option>
							<option value='eletrocauterizacao'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ELETROCAUTERIZAÇÃO</p></div></option>
							<option value='eletroencefalograma'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ELETROENCEFALOGRAMA</p></div></option>
							<option value='endoscopia_digestiva'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ENDOSCOPIA DIGESTIVA</p></div></option>
							<option value='fisioterapia'><div class="switch-wrap d-flex justify-content-between pointer" ><p>FISIOTERAPIA</p></div></option>
							<option value='holter_mapa'><div class="switch-wrap d-flex justify-content-between pointer" ><P> HOLTER / MAPA </p></div></P>
							<option value='itb'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ITB</p></div></option>
							<option value='laboratorio_analises_clinicas'><div class="switch-wrap d-flex justify-content-between pointer" ><p>LABORATÓRIO (Análises Clínicas)</p></div></option>
							<option value='raio_x'><div class="switch-wrap d-flex justify-content-between pointer" ><p>RAIO-X</p></div></option>
							<option value='teste_alergico_exame_toxicologico'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE ALÉRGICO / EXAME TOXICOLÓGICO</p></div></option>
							<option value='teste_da_linguinha'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE DA LINGUINHA</p></div></option>
							<option value='teste_da_orelhinha'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE DA ORELHINHA</p></div></option>
							<option value='teste_do_olho'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE DO OLHO</p></div></option>
							<option value='teste_do_pezinho'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE DO PEZINHO</p></div></option>
							<option value='teste_ergometrico_teste_do_esforco'><div class="switch-wrap d-flex justify-content-between pointer" ><p>TESTE ERGOMÉTRICO (Teste do Esforço)</p></div></option>
							<option value='ultrassonografia'><div class="switch-wrap d-flex justify-content-between pointer" ><p>ULTRASSONOGRAFIA</p></div></option>

						</select>
					</div>
				</div>
				<!-- mobile	 -->
				
				<!-- desktop	 -->
				<div class="col-lg-3 col-md-4 mt-sm-30 element-wrap div_seletor_exames_desktop">
					<div class="single-element-widget">
						<h3 class="mb-30 title_color">EXAMES</h3>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('acuidade_visual');" ><p>ACUIDADE VISUAL</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('audiometria');" ><p>AUDIOMETRIA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('curva_tensional');" ><p>CURVA TENSIONAL</p></div>						
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('doppler_vascular_periferico');" ><p>DOPPLER VASCULAR PERIFÉRICO</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('dopplerfluxometria_obstetrica');" ><p>DOPPLERFLUXOMETRIA OBSTÉTRICA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('ecocardiograma');" ><p>ECOCARDIOGRAMA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('ecocardiograma_sob');" ><p>ECOCARDIOGRAMA <small>SOB STRESS</small></p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('eletrocardiograma');" ><p>ELETROCARDIOGRAMA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('eletrocauterizacao');" ><p>ELETROCAUTERIZAÇÃO</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('eletroencefalograma');" ><p>ELETROENCEFALOGRAMA</p></div>						
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('endoscopia_digestiva');" ><p>ENDOSCOPIA DIGESTIVA</p></div>												
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('fisioterapia');" ><p>FISIOTERAPIA</p></div>						
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('holter_mapa');" ><P> HOLTER / MAPA </p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('itb');" ><p>ITB</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('laboratorio_analises_clinicas');" ><p>LABORATÓRIO (Análises Clínicas)</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('raio_x');" ><p>RAIO-X</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_alergico_exame_toxicologico');" ><p>TESTE ALÉRGICO / EXAME TOXICOLÓGICO</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_da_linguinha');" ><p>TESTE DA LINGUINHA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_da_orelhinha');" ><p>TESTE DA ORELHINHA</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_do_olho');" ><p>TESTE DO OLHO</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_do_pezinho');" ><p>TESTE DO PEZINHO</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('teste_ergometrico_teste_do_esforco');" ><p>TESTE ERGOMÉTRICO (Teste do Esforço)</p></div>
						<div class="switch-wrap d-flex justify-content-between pointer" onclick="exibe_exame('ultrassonografia');" ><p>ULTRASSONOGRAFIA</p></div>
					</div>
				</div>
				<!-- desktop	 -->


				<div class="col-sm-12 col-lg-8 col-md-8">
					<h3 class="mb-30 title_color animated titulo_desk titulo_exame titulo_acuidade_visual">ACUIDADE VISUAL</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_audiometria">AUDIOMETRIA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_curva_tensional">CURVA TENSIONAL</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_doppler_vascular_periferico">DOPPLER VASCULAR PERIFÉRICO</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_dopplerfluxometria_obstetrica">DOPPLERFLUXOMETRIA OBSTÉTRICA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_ecocardiograma">ECOCARDIOGRAMA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_ecocardiograma_sob">ECOCARDIOGRAMA <small>SOB STRESS</small></h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_eletrocardiograma">ELETROCARDIOGRAMA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_eletrocauterizacao">ELETROCAUTERIZAÇÃO</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_eletroencefalograma">ELETROENCEFALOGRAMA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_endoscopia_digestiva">ENDOSCOPIA DIGESTIVA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_fisioterapia">FISIOTERAPIA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_holter_mapa">HOLTER / MAPA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_itb">ITB</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_laboratorio_analises_clinicas">LABORATÓRIO (Análises Clínicas)</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_raio_x">RAIO-X</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_alergico_exame_toxicologico">TESTE ALÉRGICO / EXAME TOXICOLÓGICO</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_da_linguinha">TESTE DA LINGUINHA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_da_orelhinha">TESTE DA ORELHINHA</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_do_olho">TESTE DO OLHO</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_do_pezinho">TESTE DO PEZINHO</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_teste_ergometrico_teste_do_esforco">TESTE ERGOMÉTRICO (Teste do Esforço)</h3>
					<h3 class="mb-30 title_color animated titulo_desk d-none titulo_exame titulo_ultrassonografia">ULTRASSONOGRAFIA</h3>				

					<div class="conteudos_exames">						
						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p animated conteudo_exame conteudo_acuidade_visual conteudo_cuidade_visual">
								<p>O exame de acuidade visual é um dos testes de  avaliação ocular. Quando uma pessoa apresentar alterações na visão ou se for necessário testar sua capacidade visual, poderá ser feito este  exame.</p>
								<p>Ele detecta o grau de aptidão do olho para perceber os detalhes espaciais, ou seja, se a pessoa consegue ou não discriminar a forma e o contorno dos objetos. De uma forma resumida, o exame especifica se a visão de uma pessoa está ou não funcionando normalmente.</p>
								<p><b>PREPARO:</b> Trazer óculos ou lentes de contato no dia do exame, caso use.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_audiometria ">
								<p>A audiometria é um exame que tem como objetivo avaliar a capacidade do paciente para ouvir e interpretar sons.</p>

								<p>Através do exame detectam-se possíveis alterações auditivas e permite orientar o paciente sobre as medidas preventivas ou tratamentos mais adequados para cada caso.</p>

								<p>O exame deve ser realizado por um fonoaudiólogo devidamente habilitado, pois, esse profissional consegue diagnosticar qualquer anormalidade, medir a intensidade e verificar qual o tipo de perda auditiva que pode ter afetado o paciente.</p>

								<p>A audiometria é um exame preventivo e bastante recomendado para diagnósticos.</p>

​								<p><b>PREPARO:</b> Repouso acústico de 14 horas, evitando inclusive o uso de fones de ouvido.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_curva_tensional ">
								<p>Exame que consiste na medição da pressão intraocular em diferentes horários ao longo do dia. Permite o traçado de um gráfico com os períodos da maior e da menor medida, orientando assim os horários da prescrição medicamentosa.</p>

								<p>Esse exame é necessário tanto para o diagnóstico, quanto para o monitoramento de pacientes com glaucoma, uma vez que a pressão intraocular sofre oscilações nas 24 horas do dia. Podem ser feitas medidas de 2 em 2 horas ou 3 a 4 vezes ao dia, entre as 8 e as 18 horas.</p>

								<p>Mais raramente interna-se o paciente para medidas à noite e pela manhã no leito.</p>

								<p><b>PREPARO:</b> Necessita introdução de colírio anestésico e de um colírio contendo fluoresceína (corante amarelo), alguns minutos antes da realização de cada medida feita com o tonômetro.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_doppler_vascular_periferico ">
								<p>É um exame completamente não invasivo, indolor, sem a necessidade da injeção de contraste iodado e que proporciona informações da forma, conteúdo e características do fluxo sanguíneo. Ajuda detectar doenças nos vasos arteriais como aneurismas e placas ateroscleróticas e, nas veias, como varizes e trombose venosa.</p>

								<p>É um exame cujos resultados são de grande importância no diagnóstico das doenças vasculares mas é altamente dependente da experiência do médico que o realiza e do equipamento utilizado.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_dopplerfluxometria_obstetrica ">
								<p>A gravidez é um dos momentos mais especiais na vida de uma mulher. Para que tudo corra tranquilamente, é preciso realizar o pré-natal, ou seja, o acompanhamento médico regular.</p>

								<p>O médico irá solicitar diversos exames ao longo da gestação, incluindo exames de ultrassom, que em cada período da gravidez têm um objetivo diferente, mas servem para acompanhar o crescimento fetal, para verificar o sexo do bebê, a posição, os batimentos cardíacos, anomalias genéticas, entre outros aspectos.</p>

								<p>Quando a gestação chega as 26 semanas, é comum o médico solicitar o doppler fluxometria obstétrica, que é um tipo de ultrassom que nessa etapa irá avaliar a circulação sanguínea da mãe e do feto. Um dos principais alvos do exame é rastrear a pré-eclâmpsia, que é a pressão alta na gravidez. Além disso, o exame avaliar o fluxo sanguíneo do feto.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_ecocardiograma ">
								<p>O ecocardiograma é um exame de ultrassom que usa ondas sonoras de alta frequência para criar imagens — unidimensionais, bidimensionais e em 3D — que permitem avaliar todas as estruturas do coração e seu funcionamento: forma, tamanho e espessura do órgão, entrada e saída do sangue através das valvas, existência de massas e tumores, sopros, cicatrizes de infarto, doenças congênitas (aquelas ditas “de nascença”), alterações de contração (coração fraco), entre outros aspectos.</p>

								<p>O ecocardiograma é um exame simples, pouco invasivo e indolor. Em geral, é rápido — dura cerca de 15 minutos — e não necessita de preparo prévio. Pode ser feito por adultos, crianças e mulheres grávidas (a partir da 28 semana de gestação).</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_ecocardiograma_sob ">
								<p>A ecocardiografia ou ecocardiograma sob estresse farmacológico é um exame de ultrassom do coração, associado ao uso do medicamento de dipiridamol, que possibilitam visualizar a contração do coração em repouso e em esforço máximo, semelhante ao atingido durante o exame de esforço realizado em esteira ergométrica.</p>

								<p>O paciente recebe os medicamentos por uma veia (via intravenosa) e em doses crescentes – chamadas “estágios do exame”. Cada estágio tem a duração aproximada de 3 minutos. Durante a realização do exame, são verificadas continuamente a pressão arterial, a frequência e o ritmo cardíaco, além dos níveis de oxigênio no sangue; também são realizados eletrocardiogramas em cada estágio.</p>

								<p>O paciente permanece em repouso durante 30 minutos após o término do exame. Após 60 minutos, pode retornar à sua rotina, sem restrição de dieta. Caso utilize medicação de uso contínuo, esta deverá ser ingerida normalmente.</p>

								<p><b>PREPARO:</b> Jejum de quatro horas.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_eletrocardiograma ">
								<p>Eletrocardiograma, ou ECG, é um exame que avalia a atividade elétrica do coração a partir de eletrodos fixados na pele. Essa atividade é caracterizada pela variação na quantidade de íons de sódio dentro e fora das células musculares cardíacas.</p>

								<p>O resultado deste exame é registrado em gráficos que comparam a atividade cardíaca do paciente com o padrão, indicando se a atividade cardíaca está dentro da normalidade ou se há alterações nos músculos e nervos do coração.</p>

								<p><b>PREPARO:</b> Não é necessário. </p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_eletrocauterizacao ">
								<p>A eletrocauterização é um procedimento cirúrgico seguro, que é utilizado de forma rotineira em cirurgias para queimar os tecidos indesejáveis ou nocivos, sendo indicado para o tratamento de lesões benignas como verrugas, nevo rubi, queratoses seborreicas, acrocórdons e lesões pré malignas como as queratoses actínicas. Sendo que a eletrocauterização também é utilizada com eficácia para reduzir ou parar os processos hemorrágicos através da “queima” dos vasos sanguíneos.</p>

								<p>Para a realização da Eletrocauterização é feita uma anestesia tópica cerca de 30 minutos antes do procedimento. Entretanto, nas lesões maiores pode haver a necessidade da aplicação de anestésico local.</p>

								<p><b>PREPARO:</b> Vide com o médico.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_eletroencefalograma ">
								<p>Eletroencefalograma (EEG) é um exame de monitoramento não-invasivo que registra a atividade elétrica do cérebro. É realizado com eletrodos fixados no couro cabeludo por meio de uma pasta condutora de eletricidade. Objetiva registrar a atividade cerebral para detectar possíveis anormalidades neurológicas.</p>

								<p>O teste é mais usado para poder detectar uma variedade de doenças psiquiátricas e neurológicas, tanto as infecciosas quanto degenerativas. Além disso, o EEG também detecta o grau de certos comas ou morte cerebral, condição na qual o cérebro perde sua funcionalidade. Ajuda ainda a detectar quando uma pessoa tem deficiência física ou problemas na saúde mental, que incluem problemas no cérebro, medula espinhal ou sistema nervoso.</p>

								<p><b>PREPARO (CRIANÇA):</b> Na véspera do exame coloque a criança para dormir o mais tarde possível e acordá-lo no dia do exame o mais cedo que poder (OBS.: a criança não poderá dormir até a realização do exame);</p>

								<p>Lave a cabeça com sabão de coco na véspera do exame e vir com a cabeça seca no dia do exame; e</p>

								<p>Leve toalha no dia do exame.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_endoscopia_digestiva ">
								<p>A endoscopia digestiva é um exame que tem como objetivo diagnosticar e tratar algumas das doenças mais comuns do sistema digestivo superior. A endoscopia também pode ser chamada de esofagogastroduodenoscopia, pois é um exame endoscópico que permite a visualização direta do interior do esôfago, estômago e duodeno.</p>

								<p>A endoscopia digestiva é feita com um aparelho chamado de endoscópio, um longo e fino tubo flexível, que possui um câmera na sua extremidade, permitindo que o interior dos órgãos digestivos sejam filmados. Os endoscópios atuais têm alta definição de imagem e podem filmar em HDTV.</p>

								<p><b>PREPARO:</b> Na hora do exame deve estar com estômago vazio, por isso não tome café da manhã e, na noite anterior faça apenas um lanche leve antes de 23:00;</p>

								<p>No dia do exame deve tomar seus medicamentos de tratamento até duas horas antes do procedimento;</p>

								<p>Tome pouca água se tiver sede ou água com açúcar se tiver fome;</p>

								<p>Deverá ir acompanhado a um adulto;</p>

								<p>Não poderá dirigir após o exame; e</p>

								<p>Leve uma toalha de rosto.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_fisioterapia ">
								<p>A Fisioterapia atua no tratamento e prevenção de doenças e lesões, decorrentes de fraturas ou má-formação ou vícios de postura. Tem como aliados, técnicas como massagens e exercícios que restaurem a capacidade física e funcionam do pacientes.</p>

								<p>Sendo assim, o profissional tem como objetivo o movimento humano, intervindo na saúde do paciente, com a finalidade de restaurar, desenvolver e conservar a capacidade física do indivíduo, melhorando sua qualidade de vida e sua saúde de forma plena.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_holter_mapa ">
								<p>O Holter é um monitor portátil que registra a atividade elétrica do coração e suas variações durante as 24 horas do dia. É um exame complementar ao eletrocardiograma para detectar alterações que em geral não aparecem num exame de tempo mais limitado, de alguns minutos.</p>

								<p>O Holter é muito utilizado para diagnosticar alterações nos batimentos cardíacos, nas síncopes ou outras alterações paroxísticas, que muitas vezes não ocorrem durante uma consulta médica. Assim, ele está indicado para pacientes com arritmias cardíacas, palpitações ou perda de consciência. Utiliza-se também o Holter para monitorar o coração depois de um infarto do miocárdio ou de uma cirurgia cardíaca. Os portadores de marca-passo e de desfibriladores têm esses aparelhos ajustados e programados a partir de informações do Holter. </p>

								<p><b>PREPARO:</b> Tomar banho antes de realiza o exame; Não usar cremes na pele do tórax antes do procedimento; É fundamental, em caso de pacientes portadores de marca-passo, trazer a carteirinha de identificação do aparelho para cópia das informações. A falta destas informações prejudica e até impede a análise e a interpretação do exame.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_itb ">
								<p>O Índice Tornozelo-Braquial (ITB) é um exame de aferição simultânea não-invasiva da pressão arterial nos membros com rapidez e excelente custo-benefício.</p>

								<p>O ITB possui ainda altas sensibilidade (90 a 97%) e especificidade (98 a 100%) para detecção de doença arterial periférica, além de ser um preditor independente de eventos cardiovasculares.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_laboratorio_analises_clinicas">
								<p>Os exames de Análises Clínicas são popularmente conhecidos como exames de laboratório ou laboratoriais. A especialidade estuda materiais biológicos como sangue, urina, fezes, entre outros.</p>

								<p>O seu objetivo é indicar, de forma precisa, alterações e disfunções que podem causar ou confirmar suspeitas de doenças. Os exames de Análises Clínicas são conduzidos por profissionais especializados e formados em Medicina, Biologia, Biomedicina, Farmácia ou Bioquímica.</p>

								<p>As principais áreas dos exames de análises clínicas são: hematologia, microbiologia, imunologia, química clínica e parasitologia.</p>

								<p><b>PREPARO:</b></p>

								<p>- O paciente não deve deixar de beber água, ainda que tenha que fazer exames que necessitem de jejum.</p>
								<p>- Caso esteja fazendo uso de medicamentos, não esqueça de relatar no atendimento.</p>
								<p>- A utilização ou suspensão de medicamentos deve seguir orientação do médico. Caso não haja recomendação, continuar tomando o medicamento no horário habitual.</p>
								<p>- Para coletas de crianças e gestantes, a orientação quanto ao jejum deve ser dada pelo médico.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_raio_x ">
								<p>A tecnologia dos raios X permite que os médicos vejam através dos tecidos humanos e examinem, com grande facilidade, ossos quebrados, cavidades, além de tornar possível o diagnóstico de várias doenças. </p>

								<p>O técnico que realiza o procedimento dá orientações ao paciente sobre o que fazer antes, durante e depois do registro da imagem. Isso porque algumas vezes é necessário respirar fundo, prender a respiração ou manter uma determinada posição por alguns segundos, para que se consiga o melhor registro possível.</p>

								<p>Os raios emitidos pela máquina não causam dor alguma. Eles passam através do corpo e “marcam” uma placa sensível, gerando a imagem do local desejado.</p>

								<p><b>PREPARO:</b> A maioria dos exames de Raio X não precisa de preparo, exceto o Raio X simples de abdome,  em que o paciente adulto em bom estado de saúde deve tomar 3 laxantes às 17:00 da véspera do exame, não jantar e vir pela manhã em jejum.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_alergico_exame_toxicologico ">
								<p>O teste de alergia é um tipo de exame de diagnóstico que serve para saber se a pessoa tem ou não algum tipo de alergia como a alergia de pele, alergia a desodorante, alimentar, medicamentosa ou até respiratória.</p>

								<p>Geralmente, o teste de alergia é feito no consultório do alergologista ou dermatologista, e é recomendado quando a pessoa apresenta coceira, inchaço ou vermelhidão na pele.</p>

								<p>Esses testes também podem ser feitos através de exames de sangue, que determinam quais as substâncias dos alimentos ou ambiente têm maior risco de provocar alergia.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_da_linguinha ">
								<p>O teste da linguinha é um exame padronizado que possibilita diagnosticar e indicar o tratamento precoce das limitações dos movimentos da língua. No caso dos recém-nascidos, a alimentação também pode ser prejudicada já que afeta a sucção, e isso tem levado a desmame precoce. Mas o bebê pode ter dificuldade de passar para a papinha, devido a deglutição prejudicada. O bebê que apresenta língua presa pode até machucar o seio da mãe ao sugar o leite.</p>

								<p>Esse procedimento é importante para corrigir o quanto antes problemas que limitam a sucção da criança durante a amamentação e também evita que o bebê cresça com dificuldades na fala.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_da_orelhinha ">
								<p>Entre os procedimentos realizados ainda na maternidade, logo após o nascimento do bebê, está a triagem neonatal auditiva ou o teste da orelhinha. O exame é feito, geralmente, no segundo ou terceiro dia de vida do bebê e identifica problemas auditivos no recém-nascido. </p>

								<p>O exame é indolor e é feito enquanto o bebê está dormindo. O fonoaudiólogo coloca um aparelho de Emissões Otoacústicas Evocadas, que produz estímulos sonoros leves e mede o retorno desses estímulos de estruturas do ouvido interno.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_do_olho ">
								<p>O teste do olhinho, também conhecido como Teste do Reflexo Vermelho, normalmente é um teste que serve para diagnosticar precocemente doenças de visão no bebê, como catarata congênita, tumor, glaucoma ou estrabismo.</p>

								<p>Esse teste deve ser feito na primeira semana de vida do recém-nascido ou na primeira consulta com o pediatra e repetido aos 4, 6, 12 e 24 meses, sendo uma importante ferramenta para prevenir a cegueira infantil.</p>

								<p>Apesar de ser indicado para todos os bebês, o teste do olhinho é particularmente importante para os bebês que nasceram com microcefalia e também para os que as mães foram infectadas com o Zika vírus durante a gravidez porque estes têm maiores chances de alterações da visão.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_do_pezinho ">
								<p>O teste do pezinho é um exame obrigatório para todos os recém-nascidos, que deve ser realizado após as primeiras 48 horas de vida. Com uma pequena picada no calcanhar, é possível encontrar várias doenças e tratá-las a tempo, antes que elas afetem o desenvolvimento do bebê.</p>

								<p>O teste consiste em obter e analisar uma amostra de sangue do recém-nascido, a fim de detectar doenças metabólicas, infecciosas, congênitas e/ou genéticas. Dever ser feito após 48 horas do nascimento, para que não seja influenciado pelo metabolismo da mãe. Além disso, o bebê precisa se alimentar antes, garantindo resultados mais precisos.</p>

								<p><b>PREPARO:</b> Não é necessário.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_teste_ergometrico_teste_do_esforco">
								<p>O teste ergométrico (também chamado teste de esforço) é um teste que mede a frequência, o ritmo cardíaco, a pressão arterial e outros parâmetros cardiológicos durante um esforço físico gradualmente crescente feito por caminhar ou correr numa esteira rolante ou numa bicicleta ergométrica.</p>

								<p>Ao mesmo tempo, observam-se os sinais e sintomas que surgem durante e após o esforço. O teste deve ser acompanhado de um eletrocardiograma contínuo, gravado em computador, que registra o funcionamento do coração nas diversas etapas do exame.</p>

								<p>Assim, o teste serve para avaliação da capacidade cardiovascular quando o indivíduo é submetido a esforços e para ajudar no diagnóstico de algumas anomalias cardíacas.</p>

								<p><b>PREPARO:</b> Leve exames anteriores (ECG, ECO, Teste Ergométrico, Cateterismo (se realizado) e receita médica);</p>

								<p>Tênis adequado para caminhada;</p>

								<p>Aparelho de barbear (somente para homens);</p>

								<p>Sutiã ou top com alças (somente para mulheres); e</p>

								<p>Fazer refeição leve uma hora antes do exame.</p>

								<p><b>Não pode fazer 12 horas antes do exame:</b> Tomar café preto com cafeína, chá, mate, bebida alcoólica, guaraná em pó, fumar, passar creme no corpo e fazer exercícios.</p>

								<p><b>ATENÇÃO:</b> Pacientes acima de 65 anos devem ir acompanhados; e </p>


                 				<p>Não suspender a medicação a não ser pelo médico.</p>
							</div>
						</div>

						<div class="row">							
							<div class="col-md-12 mt-sm-20 left-align-p d-none animated conteudo_exame conteudo_ultrassonografia ">
								<p>A ultrassonografia, também conhecida por ecografia e ultrassom, é um exame de diagnóstico que serve para visualizar em tempo real qualquer órgão ou tecido do corpo.</p>

								<p>A ultrassonografia pode ser indicada para:</p>

								<ul>
									<li> - Investigar a dor abdominal, nos flacos ou nas costas;</li>
									<li> - Diagnosticar a gravidez ou avaliar o desenvolvimento do feto;</li>
									<li> - Diagnosticar doenças do útero, trompas, ovários;</li>
									<li> - Visualizar as estruturas dos músculos, articulações, tendões ou </li>
									<li> - Para visualizar qualquer outra estrutura do corpo humano.</li>									
								</ul>
								
								<p><b>PREPARO:</b> O preparo depende do tipo da Ultrassonografia. Vide com o médico.</p>
								
							</div>
						</div>

					</div>
					
				</div>



				<div class="section-top-border" style="border-top:none;">

						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
								<h3 class="mb-30 title_color">Não há desculpas para não se cuidar</h3>
								A Policlínica Menino Jesus trabalha com diversas especialidades médicas em uma única unidade de saúde. Com um ambiente acolhedor, buscamos fazer a relação médico-paciente a mais próxima possível.
								<br><br><a href="http://menjest.dnsalias.com:30080/clinicatotal/online/?id=51J6AU38LM&src=4" target='_blank' class="template-btn">Agende sua consulta</a>
								
							</blockquote>
						</div>
					
				</div>
			</div>
		</div>
	</div>


	<!-- end section section -->




    
    <?php 
        require 'rodape.php';
    ?>