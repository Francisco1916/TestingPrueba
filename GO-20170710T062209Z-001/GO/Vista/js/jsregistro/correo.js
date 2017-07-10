function corremail(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46) || (keynum == 33) || (keynum == 35) || (keynum == 36) || (keynum == 37)
		 || (keynum == 38) || (keynum == 39) || (keynum == 40) || (keynum == 41) || (keynum == 42) || (keynum == 43)
 || (keynum == 45) || (keynum == 47) || (keynum == 61) || (keynum == 63) || (keynum == 64)	
		)
        return true;
         
        return /[A-Za-zñÑ\s\d]/.test(String.fromCharCode(keynum));
        }
		
		function BlockChars(event)
{
if (event.keyCode < 65 && event.keyCode > 90)//los numeros son codigos ASCII
event.keyCode = 0;
}
