<SCRIPT>
	var nome, nota1, nota2, nota3, nota4, media;	

	nota1 = prompt("Digite a primeira nota: ", "");
	nota2 = prompt("Digite a segunda nota: ", "");
        nota3 = prompt("Digite a terceira nota: ", "");
        nota4 = prompt("Digite a quarta nota: ", "");
	
	media = (parseInt(nota1*1) + parseInt(nota2*2) + parseInt(nota3*3) + parseInt(nota4*4))/(1+2+3+4);
  
	document.write("Média : " + media + "</BR>");
	 
	  
</SCRIPT>	