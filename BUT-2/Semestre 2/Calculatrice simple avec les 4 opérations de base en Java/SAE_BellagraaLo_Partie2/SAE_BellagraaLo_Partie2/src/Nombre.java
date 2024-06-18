public class Nombre extends Expression
{
    private int valeurNombre;

    public Nombre(int nb){
        this.valeurNombre = nb;
    }

    public Nombre(Nombre uneValeur){
        this.valeurNombre = uneValeur.valeur();
    }

    public int valeur() {
        return this.valeurNombre;
    }
    public String toString() {
        return ""+this.valeur()+"";
    }

}
