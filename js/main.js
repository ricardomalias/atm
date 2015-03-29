
function moeda(obj)
{
	v=obj.value;
	v=v.replace(/\D/g,"");
	v=v.replace(/(\d{1})(\d{1,2})$/,"$1,00");
	obj.value=v;
}

function somentenumero(e)
{
	var tecla=(window.event)?event.keyCode:e.which;
	if(tecla == 13)
		return true;
		
	var input = e.target || e.srcElement;
		
    if((tecla > 47 && tecla < 58) || tecla == 8 || tecla == 9)
		return true;
    else
		return false;
}
