/* globals confirm */
'use strict';
angular.module('SimpleMarket', []).controller('PontosCtrl',
[ '$scope', '$http', function($scope, $http) {
	

	$http.get('data/pontos.json').success(function(data) {
		$scope.atualiza();
		var senha = localStorage.getItem("senha");
		if (senha == 'lilili') {
			localStorage.clear();
			localStorage.setItem('senha', senha);
		}else{
			localStorage.clear();
		}
		//var status = localStorage.getItem("status");
		//if (status == null) {
			for (var i = 0; i < data.length; i++) {
				//var id = data[i].id;
				var nome = data[i].nome;
				var pontos = data[i].pontos;
					localStorage.setItem(nome, pontos);
				
			}
			
			console.log(JSON.stringify(localStorage));
			localStorage.setItem("status", "importado"); 
			//localStorage.setItem(produtos.id,JSON.stringify(produtos));  
		//}

		$scope.lista = localStorage;		
		

		if( $(window).width() < 800){
			$( "#sidebarToggleTop" ).trigger( "click" );
		}
		
	});




	
	$scope.atualiza = function(){
		var listaComprados = [];
		var listaNaoComprados = [];
		
		for(var i=0, len=localStorage.length; i<len; i++) {
			var key = localStorage.key(i);
			var value = localStorage[key];
			if(value =="sim"){
				listaComprados.push(key);
				//console.log(key + " => " + value);					
				//console.log(listaComprados);	
			}else{				
				listaNaoComprados.push(key);
			}
		}
		
		$scope.listaComprados = listaComprados;
		$scope.listaNaoComprados = listaNaoComprados;
				
	}
		
	$scope.selecionar = function(key) {
		$scope.inputNome = key;
	}
		
	$scope.comprarProduto = function(key) {
		localStorage.setItem(key, "sim");
		$scope.atualiza();
	}

	$scope.devolverProduto = function(key) {
		localStorage.setItem(key, "nao");
		$scope.atualiza();
	}

	$scope.adicionarProduto = function(key) {
		localStorage.setItem(key, "nao");
		$scope.inputNome = '';
		$scope.atualiza();
	}

	$scope.removerProduto = function(key) {
		localStorage.removeItem(key);
		$scope.inputNome = '';
		$scope.atualiza();
	}

	$scope.maisPonto = function(key) {
		var valor = localStorage.getItem(key);
		valor = parseInt(valor)+1;
		localStorage.setItem(key,valor);
	}

	$scope.menosPonto = function(key) {
		var valor = localStorage.getItem(key);
		valor = parseInt(valor)-1;
		localStorage.setItem(key,valor);
	}


	$scope.limparLista = function() {
		//localStorage.clear();
		location.reload();
	}
	
	$scope.importarLista = function () {
		var arquivo = $('#arquivoInput')[0].files[0];
		console.log(arquivo);
		 //data.files[0];		
		
        var reader = new FileReader();		
		
        var resp = reader.onload = function(){
        var text = JSON.parse(reader.result);
		
		for (var i = 0; i < text.length; i++) {
			//var id = data[i].id;
			var nome = text[i].nome;
			var comprado = text[i].comprado;
			
			if (comprado == undefined)
					comprado = "nao";			
				localStorage.setItem(nome, comprado);
				}			
		}
		var txt = reader.readAsText(arquivo);
		location.reload();
	 }
	
	 $scope.salvar = function(){

		var form = document.getElementById("fff");

		// alert('aqui');
		form.submit();

	 }


	$scope.finalizar = function(){
		var nome, status;
		var textToWrite;
		var d = new Date();
		var dia = d.getDate();
		if (dia < 10)
			dia = "0"+dia;
		var mes = d.getMonth()+1;
			if (mes < 10)
			mes = "0"+mes;
		var ano = d.getFullYear();
		var hour = d.getHours();
			if (hour < 10)
				hour = "0"+hour;
		var min = d.getMinutes();
			if (min < 10)
				min = "0"+min;
		var sec = d.getSeconds();
			if (sec < 10)
				sec = "0"+sec;		
		var stamp = ""+dia+"-"+mes+"-"+ano+"-"+hour+"-"+min+"-"+sec+"";

		var produtos = $('.list-group-item>span');
		$scope.listaComprados = [];
		$scope.listaNaoComprados = [produtos];
		alert("Lista com "+ ($('.list-group-item>span').length - 1) +" produtos");

		// produtos.each(function(){
		// 	//status = 'nao';
		// 	nome = $(this).text().trim();
		// 	var comprado = $(this).parent().hasClass('list-group-item-success');
		// 	comprado ? status = 'sim': status = 'nao';
		// 	textToWrite += '{"nome":"'+nome+'","comprado":"'+status+'"},\n';
		// 	//Limpa a lista
		// 	$scope.devolverProduto(nome);
		// });
		// textToWrite = textToWrite.replace("undefined","[\n");   
		// textToWrite = textToWrite.replace(",\n{\"nome\":\"status\",\"comprado\":\"nao\"},","\n]");		

		var textFileAsBlob = new Blob([textToWrite], {type:'text/json'});
		var fileNameToSaveAs = "lista-de-produtos-"+ stamp +".json";
		//var fileNameToSaveAs = "produtos.json";

		var downloadLink = document.createElement("a");
		downloadLink.download = fileNameToSaveAs;
		downloadLink.innerHTML = "Baixar arquivo";
		if (window.URL != null)
		{
			// Para webkit
			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
		}
		else
		{
			// Para o Firefox
			downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
			downloadLink.onclick = destroyClickedElement;
			downloadLink.style.display = "none";
			document.body.appendChild(downloadLink);
		}

		downloadLink.click();
	}
	//workaround para disponibilizar Download
	function destroyClickedElement(event)
	{
	document.body.removeChild(event.target);
	}

}]);


