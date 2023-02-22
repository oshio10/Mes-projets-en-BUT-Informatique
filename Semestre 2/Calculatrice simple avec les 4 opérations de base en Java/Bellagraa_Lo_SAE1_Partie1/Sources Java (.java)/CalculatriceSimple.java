public class CalculatriceSimple {
    public static void main(String[] args){
        try{
            Nombre un = new Nombre(1);
            Nombre deux = new Nombre(2);
            Nombre trois = new Nombre(3);
            Nombre quatre = new Nombre(4);
            Nombre cinq = new Nombre(5);
            Nombre sept = new Nombre(7);
            Nombre neuf = new Nombre(9);
            Nombre zero = new Nombre(0);
            Operation s;

            
            s = new Addition(un, neuf); // Addition
            affiche(s); 
            s = new Division(cinq, deux); // Division entière (sans décimales)
            affiche(s);
            s = new Soustraction(trois, sept); // Soustraction
            affiche(s);
            s = new Multiplication(quatre, deux);  // Multiplication
            affiche(s);
            s = new Division(un, zero);  //Division par zéro
            affiche(s);
           
        }
        catch(ArithmeticException e) {
            System.err.println("Vous avez un dénominateur nul\nVeuillez choisir un dénominateur différent de 0.");
        }
        System.out.println("Toutes les opérations ont été testées");
        
    }
    
    public static void affiche(Operation op){
        System.out.println(op + " = " + op.valeur()) ; // équivalent de System.out.println(s + " = " + s.valeur()) ; 
    }
}