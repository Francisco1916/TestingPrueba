function justLyn(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8))
        return true;
         
        return /[A-Za-zñÑ\s\d]/.test(String.fromCharCode(keynum));
        }
		
		function BlockChars(event)
{
if (event.keyCode < 65 && event.keyCode > 90)//los numeros son codigos ASCII
event.keyCode = 0;
}