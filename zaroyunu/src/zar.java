import java.util.Scanner;
public class zar {
    public static void main(String[] args) {
        char t='t';
        int z1,z2,s=0;
        int o1,o2=0;
        int fark=0;
        Scanner scanner=new Scanner(System.in);
       String a="Birinci oyuncunun sahip olduğu para miktarı:" ;
        System.out.print(a);
        o1=scanner.nextInt();
        String b="İkinci oyuncunun sahip olduğu para miktarı:";
        System.out.print(b);
        o2=scanner.nextInt();
        while(o1>0 && o2>0 && t=='t')
        {
            s++;
            System.out.println("Şuanda oyunun "+s+" . turundasınız");
            z1=((int)(Math.random()*6+1));
            z2=((int)(Math.random()*6+1));
            System.out.println("O1 oyuncusunun attığı zarın sayısal değeri:"+z1);
            System.out.println("O2 oyuncusunun attığı zarın sayısal değeri:"+z2);
            if(z1<z2)
            {
                fark=z2-z1;
                o1=o1-fark;
                o2+=fark;
                System.out.println("O1 oyuncusunun kalan parası:"+o1);
            }
            else if(z2<z1)
            {
                fark=z1-z2;
                o2=o2-fark;
                o1+=fark;
                System.out.println("O2 oyuncusunun kalan parası:"+o2);
            }
            else 
            {
                System.out.println("Lütfen tekrar zar atınız...");
            }
            if(o1<=0 || o2<=0)
            {
                break;
            }
            else 
            {
                System.out.print("Tekrar zar atmak için t'ye basınız:");
                t=scanner.next().charAt(0);
            }  
        }
        if(o1<=0)
        {
            System.out.println("2. oyuncu "+s+". turda oyunu kazandı.");
        }
        else
        {
            System.out.println("1. oyuncu "+s+". turda oyunu kazandı.");
        } 
    }
}
