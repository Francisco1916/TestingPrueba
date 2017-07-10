function justLyn(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46)|| (keynum == 160)|| (keynum == 239))
        return true;
         
        return /[A-Za-zñÑ\s\d]/.test(String.fromCharCode(keynum));
        }
		
		function BlockChars(event)
{
if (event.keyCode < 65 && event.keyCode > 90)//los numeros son codigos ASCII
event.keyCode = 0;
}

/*

function validarNum(e)
{
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) return true;
    patron = /\d/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

*/