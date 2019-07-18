function comboMultiple(campo){
	if(campo.indexOf('<!-') == -1){
		var comboTD = eval("document.getElementById('comboTD" + campo + "')");
		var comboDiv = eval("document.getElementById('comboDiv" + campo + "')");
		var comboSel = eval("document.forms[0]." + campo );
	}else{
		var comboTD = document.getElementById('comboTD<!--{ $campos.sections[0].elements[formulario].name }-->');
		var comboDiv = document.getElementById('comboDiv<!--{ $campos.sections[0].elements[formulario].name }-->');
		var comboSel = document.getElementById('comboSel');
	}
	
	if(comboTD.noWrap == true){comboTD.noWrap = false;}else{comboTD.noWrap = true;}
	if(comboDiv.className == "comboDiv"){comboDiv.className = "comboDivMulti";}else{comboDiv.className = "comboDiv";}
	if(comboSel.className == "comboSel"){comboSel.className = "comboSelMulti";}else{comboSel.className = "comboSel";}
	if(comboSel.multiple == true){comboSel.multiple = false;}else{comboSel.multiple = true;}

	var color = "#ffffff";
	for(i=1; i<comboSel.length; i++){
		if(color == "#fcfaf6"){	color = "#ffffff"; }else{ color = "#fcfaf6"; }
		comboSel.options[i].style.backgroundColor = color;
	}
}