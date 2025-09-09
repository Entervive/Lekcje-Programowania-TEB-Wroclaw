import java.util.Scanner;

public class liczbaPodzielnaPrzezPrzedzialPetle {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);

        System.out.println("Podaj liczbę z przedziału 1-10: ");
        int liczba = scan.nextInt();

        if (liczba < 1 || liczba > 10) {
            System.out.println("Liczba spoza przedziału");
        } else {
            System.out.println("Liczba z przedziału");
        }

        for (int i = 1; i <= 100; i++) {
            if (i % liczba == 0) {
                System.out.println(i);
            }
        }
    }
}
