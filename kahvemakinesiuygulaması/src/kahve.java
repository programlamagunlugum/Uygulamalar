import java.util.Scanner;
public class kahve {
    public static void main(String[] args) throws InterruptedException {
        String kahvecesitleri=
                "1-) Dibek Kahvesi\n"+
                "2-)Menengiç Kahvesi\n"+
                "3-)Çörekotu Kahvesi\n"+
                "Adana Gar Kahvesi\n"+
                "5-)Sütlü Türk Kahvesi";
        System.out.println(kahvecesitleri);
        System.out.print("Kaç numaralı kahveyi almak istersiniz?");
        Scanner scanner=new Scanner(System.in);
        int kahvesecimi=scanner.nextInt();
        String seker=
                "a-Şekersiz\n"+
                "b-)Az Şekerli\n"+
                "c-)Orta Şekerli\n"+
                "d-)Şekerli";
        System.out.println(seker);
        System.out.print("Kahvenizin şeker durumunu seçiniz:");
        scanner.nextLine();
        String sekersayisi=scanner.nextLine();
        String secim="";
        if(sekersayisi.equals("a"))
        {
            secim="Şekersiz";
        }
        else if(sekersayisi.equals("b"))
        {
           secim="Az Şekerli";         
        }
        else if(sekersayisi.equals("c"))
        {
            secim="Orta Şekerli";
        }
        else if(sekersayisi.equals("d"))
        {
            secim="Şekerli";
        }
        else
        {
            System.out.println("Şeker seçiminiz hatalıdır .");
        }
        switch(kahvesecimi)
        {
            case 1:System.out.println("Kahveniz hazırlanıyor...");
            Thread.sleep(2000);
            String bildirim=secim+"Dibek kahveniz hazır\n Afiyet olsun";
                System.out.println(bildirim);
                break; 
            case 2:System.out.println("Kahveniz hazırlanıyor...");
            Thread.sleep(2000);
             String bildirim1=secim+"Menengiç kahveniz hazır\n Afiyet olsun";
                System.out.println(bildirim1);
                break;  
            case 3:System.out.println("Kahveniz hazırlanıyor...");
            Thread.sleep(2000);
            String bildirim2=secim+"Çörekotu kahveniz hazır\n Afiyet olsun";
                System.out.println(bildirim2);
                break;    
            case 4:System.out.println("Kahveniz hazırlanıyor...");
            Thread.sleep(2000);
            String bildirim3=secim+"Adana Gar kahveniz hazır\n Afiyet olsun";
                System.out.println(bildirim3);
                break; 
            case 5:System.out.println("Kahveniz hazırlanıyor...");
            Thread.sleep(2000);
            String bildirim4=secim+"Sütlü kahveniz hazır\n Afiyet olsun";
                System.out.println(bildirim4);
                break;   
            default: System.out.println("Kahve seçimini hatalı yaptınız.");
        }
    }
}
