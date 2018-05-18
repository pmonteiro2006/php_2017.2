package app;

import entidade.Cliente;

public class AppTeste {
	public static void main(String[] args) {
		
		Cliente cliente;           // referência do objeto
		cliente = new Cliente();   // criação da instância do objeto
		
		cliente.setId(1);
		cliente.setNome("Paulo Monteiro");
		cliente.setEmail("paulo@gmail.com");
		
		System.out.println(cliente.getNome());
	}
}