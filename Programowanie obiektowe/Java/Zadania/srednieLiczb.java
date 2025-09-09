import java.util.Scanner; // Import klasy Scanner do wczytywania danych od użytkownika

public class srednieLiczb {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in); // Tworzenie obiektu Scanner do wczytywania danych

        System.out.println("Podaj pierwszą libczbę: ");
        float liczba1 = scan.nextFloat(); // Wczytanie liczby zmiennoprzecinkowej od użytkownika

        System.out.println("Podaj drugą libczbę: ");
        int liczba2 = scan.nextInt(); // Wczytanie liczby całkow

        System.out.println("Średnia z podanych liczb to:" + liczba1/liczba2); // Wyświetlenie wyniku dzielenia

        scan.close(); // Zamknięcie obiektu Scanner (Opcjonalne, ale dobre praktyki)
    }
}
