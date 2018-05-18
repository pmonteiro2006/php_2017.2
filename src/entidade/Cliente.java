package entidade;

public class Cliente {
	
	private int id;
	private String nome;
	private String email;
	
	// gets e sets
	public void setId(int id) {
		this.id = id;     // usar o this para saber a quem está atribuindo
	}	
	public int getId() {
		return id;
	}
	
	public void setNome(String nome) {
		this.nome = nome;     // usar o this para saber a quem está atribuindo
	}	
	public String getNome() {
		return nome;
	}
	
	public void setEmail(String email) {
		this.email = email;     // usar o this para saber a quem está atribuindo
	}	
	public String getEmail() {
		return email;
	}	
}