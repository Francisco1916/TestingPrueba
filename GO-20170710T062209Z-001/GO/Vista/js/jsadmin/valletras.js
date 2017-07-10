function justLetters(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46)|| (keynum == 33)|| (keynum == 127)|| (keynum == 36)|| (keynum == 35)|| (keynum == 160)|| (keynum == 239)|| (keynum == 144))
        return true;
         
        return /[A-Za-zñÑáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]/.test(String.fromCharCode(keynum));
        }
		
		function BlockChars(event)
{
if (event.keyCode < 65 && event.keyCode > 90)//los numeros son codigos ASCII
event.keyCode = 0;
}