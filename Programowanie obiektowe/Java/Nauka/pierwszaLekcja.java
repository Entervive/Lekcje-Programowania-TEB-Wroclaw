package Java.Nauka;
import java.util.Scanner; // Import klasy Scanner do wczytywania danych od użytkownika
// Import wszystkich klas z pakietu java.util "import java.util.*;""

// Definicja klasy main
public class pierwszaLekcja {
    // Główna metoda programu
    public static void main(String[] args) {
        // Wypisanie "Hello, World!" na konsolę
        System.out.println("Hello, World!");

        // Zmienne deklaruje się tak samo, jak w innych językach
        int nazwa = 4;
        float nazwa2 = 3.4f; // Pamiętaj o 'f' na końcu dla float
        
        System.out.println(nazwa);
        System.out.println(nazwa2);

        Scanner scan = new Scanner(System.in); // Tworzenie obiektu Scanner do wczytywania danych

        System.out.println("Podaj liczbę całkowitą: "); // Prośba o podanie liczby
        int liczba = scan.nextInt(); // Wczytanie liczby całkowitej od użytkownika
        System.out.println("Podana liczba to: " + liczba); // Wyświetlenie podanej liczby

        scan.close(); // Zamknięcie obiektu Scanner po użyciu (Opcjonalne, ale dobre praktyki)
    }
}
