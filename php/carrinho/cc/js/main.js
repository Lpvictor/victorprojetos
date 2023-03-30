var list = [
	{"desc":"arroz", "qtd":"1", "valor":"5.40"},
	{"desc":"cerveja", "qtd":"12", "valor":"2.99"},
	{"desc":"carne", "qtd":"1", "valor":"15.00"}
];


//somando total
function getTotal(list){
	var total = 0;
	for(var key in list){
		total += list[key].qtd * list[key].valor;
	}
	document.getElementById("totalValue").innerHTML = formatValue(total);
}

//criando a tabela
function setList(list){
	var table = '<thead><tr><td>Descrição</td><td>Quantidade</td><td>Valor</td><td>Ação</td></tr></thead><tbody>';
	for(var key in list){
		table += '<tr><td>'+ formatDesc(list[key].desc) +'</td><td>'+ formatAmount(list[key].qtd) +'</td><td>'+ formatValue(list[key].valor) +'</td><td><button class="btn btn-default" onclick="setUpdate('+key+');">Editar</button> <button class="btn btn-default" onclick="deleteData('+key+');">Deletar</button></td></tr>';
	}
	table += '</tbody>';

	document.getElementById('listTable').innerHTML = table;
	getTotal(list);
	saveListStorage(list);
}

//formatando o nome do produto
function formatDesc(desc){
	var str = desc.toLowerCase();
	str = str.charAt(0).toUpperCase() + str.slice(1);
	return str;
}

//formatando a quantidade
function formatAmount(qtd){
	return parseInt(qtd);
}

//formatando o preço
function formatValue(valor){
	var str = parseFloat(valor).toFixed(2) + "";
	str = str.replace(".",",");
	str = "R$ " + str;
	return str;
}

//adicionar novo produto
function addData(){
	if(!validation()){
		return;
	}
	var desc = document.getElementById("desc").value;
	var qtd = document.getElementById("qtd").value;
	var valor = document.getElementById("valor").value;

	list.unshift({"desc":desc , "qtd":qtd , "valor":valor });
	setList(list);
}

//botões de editar
function setUpdate(id){
	var obj = list[id];
	document.getElementById("desc").value = obj.desc;
	document.getElementById("qtd").value = obj.qtd;
	document.getElementById("valor").value = obj.valor;
	document.getElementById("btnUpdate").style.display = "inline-block";
	document.getElementById("btnAdd").style.display = "none";

	document.getElementById("inputIDUpdate").innerHTML = '<input id="idUpdate" type="hidden" value="'+id+'">';
}

//limpa os campos de editar
function resetForm(){
	document.getElementById("desc").value = "";
	document.getElementById("qtd").value = "";
	document.getElementById("valor").value = "";
	document.getElementById("btnUpdate").style.display = "none";
	document.getElementById("btnAdd").style.display = "inline-block";
	
	document.getElementById("inputIDUpdate").innerHTML = "";
	document.getElementById("errors").style.display = "none";
}

//atualizando os dados
function updateData(){
	if(!validation()){
		return;
	}
	var id = document.getElementById("idUpdate").value;
	var desc = document.getElementById("desc").value;
	var qtd = document.getElementById("qtd").value;
	var valor = document.getElementById("valor").value;

	list[id] = {"desc":desc, "qtd":qtd, "valor":valor};
	resetForm();
	setList(list);
}

//deletando os dados
function deleteData(id){
	if(confirm("Deseja deletar esse item?")){
		if(id === list.length - 1){
			list.pop();
		}else if(id === 0){
			list.shift();
		}else{
			var arrAuxIni = list.slice(0,id);
			var arrAuxEnd = list.slice(id + 1);
			list = arrAuxIni.concat(arrAuxEnd);
		}
		setList(list);
	}
}

//validando e printando erros
function validation(){
	var desc = document.getElementById("desc").value;
	var qtd = document.getElementById("qtd").value;
	var valor = document.getElementById("valor").value;
	var errors = "";
	document.getElementById("errors").style.display = "none";

	if(desc === ""){
		errors += '<p>Preencha a descrição</p>';
	}
	if(qtd === ""){
		errors += '<p>Preencha a quantidade</p>';
	}else if(qtd != parseInt(qtd)){
		errors += '<p>Preencha um valor válido</p>';
	}
	if(valor === ""){
		errors += '<p>Preencha um valor</p>';
	}else if(valor != parseFloat(valor)){
		errors += '<p>Preencha um valor válido</p>';
	}

	if(errors != ""){
		document.getElementById("errors").style.display = "block";
		document.getElementById("errors").innerHTML = "<h3>Erro:</h3>" + errors;
		return 0;
	}else{
		return 1;
	}
}

//deletando lista
function deleteList(){
	if (confirm("Deletar da lista?")){
		list = [];
		setList(list);
	}
}

//salvando em storage
function saveListStorage(list){
	var jsonStr = JSON.stringify(list);
	localStorage.setItem("list",jsonStr);
}

//verifica se já tem algo salvo
function initListStorage(){
	var testList = localStorage.getItem("list");
	if(testList){
		list = JSON.parse(testList);
	}
	setList(list);
}

initListStorage();