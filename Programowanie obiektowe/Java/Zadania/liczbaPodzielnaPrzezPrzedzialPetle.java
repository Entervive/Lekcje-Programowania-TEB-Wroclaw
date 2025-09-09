import java.util.Scanner; // Import klasy Scanner do wczytywania danych od użytkownika

public class liczbaPodzielnaPrzezPrzedzialPetle {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in); // Tworzenie obiektu Scanner

        System.out.println("Podaj liczbę z przedziału 1-10: "); // Prośba o podanie liczby
        int liczba = scan.nextInt(); // Wczytanie liczby od użytkownika

        if (liczba < 1 || liczba > 10) { // Sprawdzenie, czy liczba jest poza przedziałem 1-10
            System.out.println("Liczba spoza przedziału"); // Komunikat o liczbie spoza 
        } else { // Jeśli liczba jest w przedziale 1-10
            for (int i = 1; i <= 100; i++) { // Pętla od 1 do 100
                if (i % liczba == 0) { // Sprawdzenie, czy i jest podzielne przez podaną liczbę
                    System.out.println(i); // Wypisanie liczby podzielnej
                }
            }
        }


    }
}
