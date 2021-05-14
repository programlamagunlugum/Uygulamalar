import java.util.Random;
import java.util.Scanner;
public class oyun {
    public static void main(String[] args) {
        short tahminhakki=6;
        String message=
                "Sayı Tahmin Oyununa Hoş Geldiniz\n"+
                "Oyunumuzda tahmin edilecek sayı 0 ile 20 arasındadır ve 6 tahmin hakkınız bulunmaktadır.\n"+
                "Tahmin bitince oyun sonlanır.\n"+
                "Fakat isterseniz tekrar bir rastgele sayı atarak oyunu tekrar başlatabilirsiniz.\n"+
                "Oyun başladı \n Başarılar...\n"+
                "Tahmini sayıları giriniz:";
        while (true) 
        {
            System.out.println(message);  
            Random random =new Random();
            int tahminedileceksayi=random.nextInt(20);
            Scanner scanner =new Scanner(System.in);
                for(int i=tahminhakki;i>0;i--)
                {
                    int tahminedilensayi=scanner.nextInt();
                        if(tahminedileceksayi==tahminedilensayi)
                        {
                            String message2=
                                "Tebrikler sayıyı doğru tahmin ettiniz.\n "+
                                "Tekrar oynamak için 1'e çıkmak için 0'a basınız.";
                            System.out.println(message2);
                            int cevap=scanner.nextInt();
                                if(cevap==0)
                                {
                                     System.out.println("Çıkış yapılıyor...");
                                     return;
                                }
                                else
                                {
                                break;
                                }
                        }
                        else if(tahminedileceksayi!=tahminedilensayi)
                        {
                            System.out.println("Hatalı bir tahmin yaptınız."+" "+"Kalan tahmin hakkı:"+(i-1));
                                if(i==1)
                                {
                                    String message3=
                                        "Tahmin hakkınız bitti\n"+
                                        "Tekrar oynamak için 1'e çıkmak için 0'a basınız";
                                    System.out.println(message3);
                                    int cevap=scanner.nextInt();
                                        if(cevap==0)
                                        {
                                            System.out.println("Çıkış yapılıyor...");
                                            return;
                                        }
                                    else
                                    {
                                        break;
                                    }
                                    
                                }
                                tahminorani(tahminedilensayi, tahminedileceksayi);
                        }
                                
                }
        }
        }
    static void tahminorani(int tahminedilensayi,int tahminedileceksayi){
        int f=tahminedilensayi-tahminedileceksayi;
        if(f<=0 && f>-2 || f>=0 && f<2)
        {
            System.out.println("Sayıya çok yaklaştınız.");
        }
        else if(f<=-2 && f>-4 || f>=2 && f<4)
        {
            System.out.println("Sayıya yaklaşıyorsunuz.");
        }
        else if(f<=-4 && f>-14 || f>=4 && f<14)
        {
            System.out.println("Sayıdan uzaklaşıyorsunuz.");
            
        }
        else if(f<=-15 && f>-19 || f>=15 && f<=19)
        {
            System.out.println("Sayıdan çok uzaklaştınız.");
        }
    }
    }
    

