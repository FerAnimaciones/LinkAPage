
var inputs,labels,contenedor;
function inicializar(){
	contenedor = document.getElementById('contenedor');
	inputs = contenedor.getElementsByTagName('input');
	labels = contenedor.getElementsByTagName('label');
	texarea = contenedor.getElementsByTagName('textarea');
	opciones = contenedor.getElementsByTagName('select');

	var index,index2=0;

	(function(index){
		texarea[0].addEventListener('click', function(event) {
			ffocus(labels[3],texarea[0]);
		}, false);
	})(index);
	(function(index){
		texarea[0].addEventListener('blur', function(event) {
			fblur(labels[3],texarea[0]);
		}, false);
	})(index);

	
	(function(index){
		opciones[0].addEventListener('click', function(event) {
			fabriropciones(labels[4],opciones[0]);

		}, false);
	})(index);
	(function(index){
		opciones[0].addEventListener('blur', function(event) {
			fcerraropciones(labels[4],opciones[0]);
		}, false);
	})(index);
	(function(index){
		opciones[1].addEventListener('click', function(event) {
			fabriropciones(labels[5],opciones[1]);

		}, false);
	})(index);
	(function(index){
		opciones[1].addEventListener('blur', function(event) {
			fcerraropciones(labels[5],opciones[1]);
		}, false);
	})(index);

	for ( index = 0; index < inputs.length-2; index++) 
	{
		console.log(index);
		if(index === 3)
		{
			(function(index){
				inputs[index].addEventListener('focus', function(event) {
					ffocus(labels[6],inputs[index]);
				}, false);
			})(index);
			(function(index){
				inputs[index].addEventListener('blur', function(event) {
					fblur(labels[6],inputs[index]);
				}, false);
			})(index);
		}
		else
		{
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
function fabriropciones(label,input)
{
	if(label.style.color==="blue")
	{
		label.style.color="gray";
	}
	else
	{
		label.style.color="blue";
	}
}
function fcerraropciones(label,input){
	if(input.selectedIndex="0")
	{
		label.style.color="gray";
	}
	else
	{
		label.style.color="gray";
	}
}