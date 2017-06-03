	var inputs,labels,contenedor;
	function inicializar(){
		contenedor = document.getElementById('contenedor');
		inputs = contenedor.getElementsByTagName('input');
		labels = contenedor.getElementsByTagName('label');
		var index,index2=0 ;
		for ( index = 0; index < inputs.length; index++) {
			(function(index){
				inputs[index].addEventListener('focus', function(event) {
					ffocus(labels[index],inputs[index]);
				}, false);
			})(index);
			(function(index){
				inputs[index].addEventListener('blur', function(event) {
					fblur(labels[index],inputs[index]);
				}, false);
			})(index);
		}  
	}
	function ffocus(label,input)
	{

			label.style.color="blue";
	}
	function fblur(label,input){
		if(input.value==""){
			label.style.color="red";
		}
		else
		{
			label.style.color="gray";
		}
	}
	function reptido(mensaje,input1,input2){
		if(input1.value!=input2.value){
			alert(mensaje);
		}
	}
