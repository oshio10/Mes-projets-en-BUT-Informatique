public class Nombre
{
	private int  valeurNombre; 

    public Nombre(int nb){
        this.valeurNombre = nb;
    }

	
    public int valeur() {
        return this.valeurNombre;
    }
    public String toString() {
        return String.valueOf(valeur());
    }
    
}

