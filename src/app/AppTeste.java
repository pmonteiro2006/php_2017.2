package app;

import entidade.Cliente;

public class AppTeste {
	public static void main(String[] args) {
		
		Cliente cliente;           // refer�ncia do objeto
		cliente = new Cliente();   // cria��o da inst�ncia do objeto
		
		cliente.setId(1);
		cliente.setNome("Paulo Monteiro");
		cliente.setEmail("paulo@gmail.com");
		
		System.out.println(cliente.getNome());
	}
}