
public class Addition extends Operation
{
   
    public Addition(Nombre op1, Nombre op2){
        super(op1,op2);
    }

    public int valeur(){
        return getOPerande1().valeur() + getOperande2().valeur();
    }
    public String toString(){
        return "("+getOPerande1()+" + "+getOperande2()+")";
    }
}