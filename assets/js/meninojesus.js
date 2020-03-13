$(function(){


	// {nome: "",especialidade_id: '', horario1: "", horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	const alergista = [
		{nome: "Dr. André",especialidade_id: 'alergista', horario1: "Segunda-feira a partir das 13:00", horario2: 'Quarta-feira a partir das 09:30', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]

	const clinico_geral = [
		{nome: 'Dr. André', especialidade_id: 'clinico_geral', horario1: 'Segunda-feira a partir das 13:00 ', horario2: 'Quarta-feira a partir das 09:30', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Carlos Varillas', especialidade_id: 'clinico_geral', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: 'Quinta-feira a partir das 09:00', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Conceição', especialidade_id: 'clinico_geral', horario1: 'Sexta-feira a partir das 14:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Diogo', especialidade_id: 'clinico_geral', horario1: 'Segunda-feira a partir das 13:00 ', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Elair', especialidade_id: 'clinico_geral', horario1: 'Segunda-feira das 9:00 às 12:00 ', horario2: 'Sábado das 9:00 às 12:00', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Eneida', especialidade_id: 'clinico_geral', horario1: 'Sexta-feira a partir das 15:00 ' , horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Iarmila', especialidade_id: 'clinico_geral', horario1: 'Quinta-feira a partir das 10:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Marcílio', especialidade_id: 'clinico_geral', horario1: 'Terça-feira das 08:30 às 14:00', horario2: 'Quarta-feira das 08:30 às 14:00', horario3: 'Sexta-feira das 08:30 às 14:00', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Milton', especialidade_id: 'clinico_geral', horario1: 'Terça-feira a partir das 07:30', horario2: 'Sexta-feira a partir das  07:30', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Paulo César', especialidade_id: 'clinico_geral', horario1: 'Quita-feira das 12:30 às 15:00 ', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Rosângela', especialidade_id: 'clinico_geral', horario1: 'Segunda-feira a partir das 15:00', horario2: 'Terça-feira a partir das 15:00', horario3: 'Quinta-feira a partir das 08:00', horario4: 'Sábado a partir das 09:30', horario5: '', horario6: ''},		
	]

	const dermatologia = [
		{nome: 'Dr. Milton', especialidade_id: 'dermatologia', horario1: 'Terça-feira a partir das 07:30', horario2: 'Quarta-feira das 09:00 às 12:00', horario3: 'Sexta-feira a partir das 07:30', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Paloma', especialidade_id: 'dermatologia', horario1: 'Quarta-feira das 09:00 às 12:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const endocrinologia = [
		{nome: 'Dra. Iarmila', especialidade_id: 'endocrinologia', horario1: 'Quinta-feira a partir das 10:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const fisioterapia = [
		{nome: 'Dra. Silvia', especialidade_id: 'fisioterapia', horario1: 'Segunda-feira das 08:00 às 11:00', horario2: 'Quarta-feira das 08:00 às 11:00', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Fernanda', especialidade_id: 'fisioterapia', horario1: 'Terça-feira das 09:00 às 15:00', horario2: 'Quinta-feira das 09:00 às 15:00', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Daiane', especialidade_id: 'fisioterapia', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: 'Sexta-feira a partir das 09:00', horario4: '', horario5: '', horario6: ''},
	]

	const gastroenterologia = [
		{nome: 'Dra. Ana Cristina', especialidade_id: 'gastroenterologia', horario1: 'Sexta-feira das 10:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Diogo', especialidade_id: 'gastroenterologia', horario1: 'Segunda-feira das 13:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]
	
	const geriatria = [
		{nome: 'Dr. Carlos Varillas', especialidade_id: 'geriatria', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: 'Quinta-feira a partir das 09:00', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Rosângela', especialidade_id: 'geriatria', horario1: 'Segunda-feira a partir das 15:00', horario2: 'Terça-feira a partir das 15:00', horario3: 'Quinta-feira a partir das 09:30', horario4: 'Sábado a partir das 09:30', horario5: '', horario6: ''},		
	]

	const ginecologia = [
		{nome: 'Dr. Alcemir Junior', especialidade_id: 'ginecologia', horario1: 'Quinta-feira a partir das 09:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Carlos Varillas', especialidade_id: 'ginecologia', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: 'Quinta-feira a partir das 09:00', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dra. Claudia Maria', especialidade_id: 'ginecologia', horario1: 'terça-feira das 09:00 ás 12:00', horario2: 'Sexta-feira das 09:00 ás 12:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Conceição', especialidade_id: 'ginecologia', horario1: 'Sexta-feira a partir das 14:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Elair de Magalhães', especialidade_id: 'ginecologia', horario1: 'Segunda-feira das 09:00 às 12:00', horario2: 'Sábado das 09:00 às 12:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Marcílio Quintão', especialidade_id: 'ginecologia', horario1: 'Terçaterça-feira das 08:30 às 14:00', horario2: 'Quarta-feira das 08:30 às 14:00', horario3: 'Sexta-feira das 08:30 às 14:00', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Paulo Cesar', especialidade_id: 'ginecologia', horario1: 'Quinta-feira das 12:30 às 15:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]

	const medicina_do_trabalho = [
		{nome: 'Dr. Jorge Ribeiro', especialidade_id: 'medicina_do_trabalho', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Sexta-feira a partir das 09:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Paulo Roberto', especialidade_id: 'medicina_do_trabalho', horario1: 'Terça-feira a partir das 13:30', horario2: 'Quarta-feira das 13:30', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const neurologia = [
		{nome: 'Dr. Carlos Eduardo', especialidade_id: 'neurologia', horario1: 'Quarta-feira a partir das 09:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},			
	]

	const nutricao = [
		{nome: 'Dra. Hediane', especialidade_id: 'nutricao', horario1: 'Sábado a partir das 09:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Iara', especialidade_id: 'nutricao', horario1: 'Sexta-feira a partir das 09:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Mariana', especialidade_id: 'nutricao', horario1: 'Segunda-feira a partir das 13:00', horario2: 'Quarta-feira a partir das 09:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]

	const obstetricia = [
		{nome: 'Dr. Alcemir Junior', especialidade_id: 'obstetricia', horario1: 'Quita-feira a partir das 09:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Carlos Varillas', especialidade_id: 'obstetricia', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: 'Quinta-feira a partir das 09:00', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dra. Claudia Maria', especialidade_id: 'obstetricia', horario1: 'Terça-feira das 09:00 às 12:00', horario2: 'Sexta-feira das 09:00 às 12:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Sergio Satoshi', especialidade_id: 'obstetricia', horario1: 'Quinta-feira das 08:00 às 11:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]

	const Oftalmologia = [
		{nome: 'Dr. João Hélio', especialidade_id: 'Oftalmologia', horario1: 'Terça-feira a partir das 09:00', horario2: 'Quarta-feira a partir das 09:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
	]

	const ortopedia = [
		{nome: 'Dr. Jorge Ribeiro', especialidade_id: 'ortopedia', horario1: 'Segunda-feira a partir das 09:00', horario2: 'Sexta-feira a partir das 09:00', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dra. Valeria Silveira', especialidade_id: 'ortopedia', horario1: 'Sábado das 08:00 às 11:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. Paulo Roberto', especialidade_id: 'ortopedia', horario1: 'Terça-feira a partir das 13:30', horario2: 'Quarta-feira das 12:30 às 14:00', horario3: 'Quinta-feira a partir das 13:30', horario4: '', horario5: '', horario6: ''},		
	]

	const otorrinolaringologia = [
		{nome: 'Dra. Eneida', especialidade_id: 'otorrinolaringologia', horario1: 'Sexta-feira a partir das 14:30', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dr. João Barizon', especialidade_id: 'otorrinolaringologia', horario1: 'Terça-feira das 08:00 às 11:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const pediatria = [
		{nome: 'Dr. Cid Antônio', especialidade_id: 'pediatria', horario1: 'Terça-feira a partir das 09:00', horario2: 'Quinta-feira a partir das 13:30', horario3: '', horario4: '', horario5: '', horario6: ''},		
		{nome: 'Dra. Maria De Fátima', especialidade_id: 'pediatria', horario1: 'Quinta-feira das 09:00 às 11:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
		{nome: 'Dr. Sérgio Palermo', especialidade_id: 'pediatria', horario1: 'Segunda-feira das 09:00 às 11:30', horario2: 'Quarta-feira das 09:00 às 11:30', horario3: 'Sexta-feira das 09:00 às 11:30', horario4: 'Sábado das 09:00 às 11:30', horario5: '', horario6: ''},
	]

	const psicologia = [
		{nome: 'Dra. Suely', especialidade_id: 'psicologia', horario1: 'Terça-feira a partir das 09:30', horario2: 'Sábado a partir das 08:30', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const psiquiatria = [
		{nome: 'Dr. Carlos Eduardo', especialidade_id: 'psiquiatria', horario1: 'Quarta-feira a partir das 09:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const urologia = [
		{nome: 'Dr. Gian', especialidade_id: 'urologia', horario1: 'Quarta-feira a partir das 07:00', horario2: '', horario3: '', horario4: '', horario5: '', horario6: ''},
	]

	const array_especialidades = [alergista, clinico_geral, dermatologia, endocrinologia, fisioterapia, gastroenterologia, geriatria, ginecologia, medicina_do_trabalho, neurologia, nutricao, obstetricia, Oftalmologia, ortopedia, otorrinolaringologia, pediatria, psicologia, psiquiatria, urologia];
	//CLINICO GERAL
	var cont  = 0;
	var grupo = 1;	
	$( array_especialidades ).each(function( index ) {
		var especialidade = this;		
		cont++;		
		if(cont > 3){
			grupo++;
			cont = 1;
		}		
		$( especialidade ).each(function( index2 ) {		
			var horarios = this.horario2 != '' ? this.horario1+"<br>"+this.horario2 : this.horario1;
			horarios = this.horario3 != '' ? horarios+"<br>"+this.horario3 : horarios;
			horarios = this.horario4 != '' ? horarios+"<br>"+this.horario4 : horarios;
			horarios = this.horario5 != '' ? horarios+"<br>"+this.horario5 : horarios;
			horarios = this.horario6 != '' ? horarios+"<br>"+this.horario6 : horarios;			
			$( "<div class='d-none especialidades_horarios' id='modal_"+this.especialidade_id+"'><span class='nome_profissional'>"+this.nome+"</span><br>"+horarios+"</div>" ).appendTo( "#"+this.especialidade_id );
		});		
	});


	$(".especialidade_titulo").click(function(){
		var especialidade = $(this).html();
		var element = $(this).parent().siblings('.especialidades_horarios');
		// console.log(element)		
		$(".titulo_modal").remove();
		$(".temp_modal").remove();

		
		$('<h3 class="mb-20 title_color titulo_modal">'+especialidade+'</h3>').appendTo('#modal_especialidade_horarios');
		$("<div class='temp_modal'></div>").appendTo("#modal_especialidade_horarios");		
		var temp = element.clone();
		temp.removeClass('d-none');
		$(".temp_modal").append(temp);

		// $( especialidade  ).appendTo("#modal_especialidade_horarios");
		// $( element  ).appendTo("#modal_especialidade_horarios");
		$("#modal_especialidade_horarios").modal({
			fadeDuration: 300,
			fadeDelay: 0.50
		});

	});
	

});