var v1=""; //string en su mayoria de numeros que ingresa el usuario
var v2=""; //almacenar un numero entero que antes era string proveniente de el v1
var v3="";
var v4="";
var resul=""; //resultado que se mostrara
var p=""; //punto y todo lo que conlleva
var q=""; //solo se puede presionar una vez el boton de operacion
var ecu=""; //nombre de la ecuacion en uso para mostrar en alerta
var paradoja=""; //nombre de la ecuacion
var alboroto=""; //numero que se concatenara
var v=""; //saber cuando dar el resultado
var nel="";
var err; //mensaje de error
			
//funciones que se pueden reutilizar aqui
			//resetear variables
function restaurar()
{
	v1="";
	v2="";
	v3="";
	v4="";
	resul="";
	p="";
	q="";
	ecu="";
	paradoja="";
	alboroto="";
	v="";
	nel="";
}
//operaciones
function operador()
{
	if (q!=1&&v1!="")
	{
		v2=parseFloat(v1);
		v1="";
		v4="";
		p="";
		q=1;
		ecu=paradoja;
	}
	else if (v1===""&&ecu!="")
	{
		ecu=paradoja;
	}
	else
	{
	}
}

//para ingresar un numero
function ingresar()
{
	if (p!=1)
	{
		document.getElementById("texto").innerHTML=v1+alboroto+".";
		v1=v1+alboroto;
		q="";
		paradoja="";
	}
	else
	{
		document.getElementById("texto").innerHTML=v1+alboroto;
		v1=v1+alboroto;
		q="";
		paradoja="";
	}
}

//botones de numeros
function num1()
{
	alboroto="1";
	ingresar();
	v=1;
}
function num2()
{
	alboroto="2";
	ingresar();
	v=1;
}
function num3()
{
	alboroto="3";
	ingresar();
	v=1;
}
function num4()
{
	alboroto="4";
	ingresar();
	v=1;
}
function num5()
{
	alboroto="5";
	ingresar();
	v=1;
}
function num6()
{
	alboroto="6";
	ingresar();
	v=1;
}
function num7()
{
	alboroto="7";
	ingresar();
	v=1;
}
function num8()
{
	alboroto="8";
	ingresar();
	v=1;
}
function num9()
{
	alboroto="9";
	if (nel===1)
	{
		v1="";
		nel="";
	}
	ingresar();
	v=1;
}
function num0()
{
	alboroto="0";
	if (v===1||v4===1)
	{
		ingresar();
	}
	else
	{
		document.getElementById("texto").innerHTML=alboroto+".";
		q="";
		paradoja="";
		nel=1;
	}
}

//aqui sintax del punto
function punto()
{
	if (v1===""&&p!=1)
	{
		document.getElementById("texto").innerHTML=v1+"0.";
		v1=v1+"0.";
		p=1;
	}
	else if (p!=1)
	{
		document.getElementById("texto").innerHTML=v1+".";
		v1=v1+".";
		p=1;
	}
	else
	{
	}
	v4=1;
}

//botones de operaciones aqui se define el nombre de la ecuacion para utilizarlo en la funcion resultado
function suma()
{
	paradoja="suma";
	operador();
	v="";
}
function resta()
{
	paradoja="resta";
	operador();
	v="";
}
function multi()
{
	paradoja="multiplicacion";
	operador();
	v="";
}
function divi()
{
	paradoja="divicion";
	operador();
	v="";
}

//boton de igual que realizara la operacion definida por la funcion anterior
function resultado()
{
	if (ecu==="suma")
	{
		if (v3!="")
		{
			resul=parseFloat(v3)+parseFloat(v1);
		}
		else
		{
			resul=v2+parseFloat(v1);
		}
	}
	else if (ecu==="resta")
	{
		if (v3!="")
		{
			resul=parseFloat(v3)-parseFloat(v1);
		}
		else
		{
			resul=v2-parseFloat(v1);
		}
	}
	else if (ecu==="divicion")
	{
		if (v3!="")
		{
			if (v1===0)
			{
				resul="ERROR";
			}
			else if (v2===0)
			{
				resul="ERROR";
			}
			else if (v3===0)
			{
				resul="ERROR";
			}
			else
			{
				resul=parseFloat(v3)/parseFloat(v1);
			}
		}
		else
		{
			if (v1===0)
			{
				resul="ERROR";
			}
			else if (v2===0)
			{
				resul="ERROR";
			}
			else if (v3===0)
			{
				resul="ERROR";
			}
			else
			{
				resul=v2/parseFloat(v1);
			}
		}
	}
	else if (ecu==="multiplicacion")
	{
		if (v3!="")
		{
			resul=parseFloat(v3)*parseFloat(v1);
		}
		else
		{
			resul=v2*parseFloat(v1);
		}
	}
	if (ecu!=""&&v1!="")
	{
		if (resul%1===0)
		{
			document.getElementById("texto").innerHTML=resul+".";
			v3=resul;
			v1="";
			v2="";
			v4="";
			resul="";
			p="";
			q="";
			v="";
		}
		else
		{
			document.getElementById("texto").innerHTML=resul;
			v3=resul;
			v1="";
			v2="";
			v4="";
			resul="";
			p="";
			q="";
			v="";
		}
	}
	else
	{
	}
	
}

//boton de reset
function otra()
{
	document.getElementById("texto").innerHTML="0.";
	restaurar();
}