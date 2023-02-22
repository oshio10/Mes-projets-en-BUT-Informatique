public class Calculatrice {
    public static void main(String[] args){
      Expression deux = new Nombre(2) ;
      Expression trois = new Nombre(3) ;
      Expression dixSept = new Nombre(17) ;

      Expression un = new Nombre(1);
      Expression sept = new Nombre(7);
      Expression quarenteDeux = new Nombre(42);

      Expression quatre = new Nombre(4);
      Expression six = new Nombre(6);
      Expression cent = new Nombre(100);

      Expression cinq = new Nombre(5);
      Expression huit = new Nombre(8);
      Expression troisCentDeux = new Nombre(302);

      Expression s1 = new Soustraction(dixSept, deux) ;
      Expression a1 = new Addition(deux, trois) ;
      Expression d1 = new Division(s1, a1) ;
      System.out.println(d1 + " = " + d1.valeur()) ; // affiche ((17 - 2) / (2 + 3)) = 5

      Expression m1 = new Multiplication(sept, quarenteDeux);
      Expression a2 = new Addition(un,sept);
      Expression s2 = new Soustraction(m1, a2);
      System.out.println(s2 + " = " + s2.valeur()) ; // affiche ((7 * 42) - (1 + 7)) = 286

      Expression d2 = new Division(cent, quatre);
      Expression m2 = new Multiplication(quatre, six);
      Expression a3 = new Addition(d2, m2);
      System.out.println(a3 + " = " + a3.valeur()); // affiche ((100 / 4) + (4 * 6)) = 49

      Expression s3 = new Soustraction(huit, cinq);
      Expression d3 = new Division(troisCentDeux, huit);
      Expression m3 = new Multiplication(s3, d3);
      System.out.println(m3 + " = " + m3.valeur()); // affiche ((8 - 5) * (302 / 8)) = 111
    }
}
