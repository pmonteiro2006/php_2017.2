package exemplo;

public class EstruturaDeDecisaoEncadeada {
	public static void main(String[] args) {
		/**
		 * Estrutura de decisão
		 	* if()
		 	* if() e else
		 	* if(), else if()
		 	* if(), else if(), else
		**/
		
		/*Segundo exemplo */
		
		String materia = "Java";
		
		if(materia == "PHP") {
			System.out.println("Disciplina do 4º módulo");
		} else if (materia == "Banco de dados") {
			System.out.println("Disciplina do 3º módulo");
		} else if (materia == "Java") {
			System.out.println("Disciplina do 5º módulo");
		} else {
			System.out.println("Disciplina não é dos módulos de programação");			
		}
	}
}