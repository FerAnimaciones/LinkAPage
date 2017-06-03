		var ul1,ul2,ul3,ul4;
		var  boton1,boton2,boton3,boton4;
		function inicializar(){
			ul1= document.getElementById("ul1");
			ul2= document.getElementById("ul2");
			ul3= document.getElementById("ul3");
			ul4= document.getElementById("ul4");
			boton1= document.getElementById("btn1");
			boton1.addEventListener("click",oocultarPanel1);
			boton2= document.getElementById("btn2");
			boton2.addEventListener("click",oocultarPanel2);
			boton3= document.getElementById("btn3");
			boton3.addEventListener("click",oocultarPanel3);
			boton4= document.getElementById("btn4");
			boton4.addEventListener("click",oocultarPanel4);
		}
		function oocultarPanel1(){
			if(ul1.style.display!="none") 
			{
				
				ul1.style.display="none";
			}
			else
			{
				ul1.style.display="block";	
			}	
		}
		function oocultarPanel2(){
			if(ul2.style.display!="none") 
			{
				
				ul2.style.display="none";
			}
			else
			{
				ul2.style.display="block";	
			}	

		}
		function oocultarPanel3(){
			if(ul3.style.display!="none") 
			{
				
				ul3.style.display="none";
			}
			else
			{
				ul3.style.display="block";	
			}	

		}
		function oocultarPanel4(){
			if(ul4.style.display!="none") 
			{
				
				ul4.style.display="none";
			}
			else
			{
				ul4.style.display="block";	
			}	

		}