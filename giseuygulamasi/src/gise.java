import java.util.Scanner;
public class gise {
    public static int toplammaliyethesapla(int toplamgecirilendakika )
    {
        int havaalanigirisucreti=50;
        int dakikamaliyet=2;
      return  (toplamgecirilendakika*dakikamaliyet+havaalanigirisucreti);
    }
    public static int toplammaliyethesapla(int toplamgecirilendakika, int otoparktagecensure)
    {
        int havaalanigirisuvreti=50;
        int dakikamaliyet=2;
        int otoparkucret=3;
       return (toplamgecirilendakika*dakikamaliyet+otoparktagecensure*otoparkucret+havaalanigirisuvreti);
    }
    public static void main(String[] args) throws InterruptedException 
    {
        Scanner scanner=new Scanner(System.in);
        String message="Havaalanımıza hoşgeldiniz...\n"+
                "Havaalanı griş ücreti 50 TL'dir."+
                "Havaalanına araçsız girişler için A kapısından araçlı girişler ise B kapısındandır.\n"+
                "Havaalanında geçirdiğiniz her dakika içn 2 TL ücret alınır.\n"+
                "Havaalanında aracızla geçirdiğiniz her dakika için 2 TL ve ek olarak "
                + "otoparkta geçirdiğiniz her dakika için 3 TL ücret alınır. ";
        System.out.println(message);
        System.out.println(" ");
        System.out.print("Lütfen kapıyı seçiniz:");
        String kapısecimi=scanner.nextLine();
        while (true) {
            if(kapısecimi.equals("A"))
            {
                String c1="Havaalanı çıkış gişesine hoş geldiniz\n"+
                        "Lütfen havaalanında geçidiğiniz toplam dakikayı giriniz:";
                System.out.print(c1);
                int toplamgecirilendakika=scanner.nextInt();
                System.out.print("Toplam Ödeme Miktarı: "+toplammaliyethesapla(toplamgecirilendakika));
                System.out.println("Ödeme işleminiz gerçekleşiyor...");
                Thread.sleep(2000);
                System.out.println("Ödeme işleminiz başarıyla gerçekleşti. İyi günler dileriz...");
                return;
            }
            else if(kapısecimi.equals("B"))
            {
                String c2="Havaalanı çıkış gişesine hoş geldiniz\n"+
                        "Havaalanında geçirdiğiniz toplam dakikayı giriniz.";
                System.out.println(c2);
                int toplamgecirilendakika=scanner.nextInt();
                System.out.print("Aracınızın otoparkta kaldığı süreyi giriniz:");
                int otoparktagecensure=scanner.nextInt();
                System.out.print("Toplam ödeme miktarı:"+toplammaliyethesapla(toplamgecirilendakika, otoparktagecensure));
                System.out.println("Ödeme işleiniz gerçekleşiyor...");
                Thread.sleep(2000);
                System.out.println("Ödeme işleminiz başarıyla gerçekleşti. İyi günler dileriz...");
                return;
            }
            else 
            {
                System.out.println("Geçersiz bir seçim yaptınız.");
            break;
            }
        }
    }
}
