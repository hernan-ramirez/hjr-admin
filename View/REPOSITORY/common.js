function OpenWin(url){
	window.open(url, "", "top=10, left=10");
}

function PopUp(url, w, h){ // version mejorada del OpenWin
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	window.open(url, 'PopUp', 'width='+ w + ', height=' + h +' , scrollbars=no, resizable=yes, left=' + LeftPosition + ', top=' + TopPosition);
}

function FitPage() { // va en el onload del body
	iWidth = (NS)?window.innerWidth:document.body.scrollWidth ; 
	iHeight = (NS)?window.innerHeight:document.body.scrollHeight + 25; 

	window.resizeTo(iWidth , iHeight); 
	self.focus(); 
}; 

function SelectFirst(ob){
	ob.options[0].selected = true;
}
function SelectNext(ob){
	if(ob.selectedIndex < ob.length-1){
		ob.options[ob.selectedIndex+1].selected = true;
	}
}
function SelectPrev(ob){
	if(ob.selectedIndex >= 1){
		ob.options[ob.selectedIndex-1].selected = true;
	}
}
