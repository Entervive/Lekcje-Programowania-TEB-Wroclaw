import java.util.Scanner; // Import klasy Scanner do odczytu danych od użytkownika

public class przedzialUzytkownikaPetle {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in); // Utworzenie obiektu Scanner do odczytu danych wejściowych

        System.out.print("Podaj początek przedziału: "); // Prośba o podanie początku przedziału
        int start = scan.nextInt(); // Odczytanie wartości początkowej przedziału od użytkownika

        System.out.print("Podaj koniec przedziału: "); // Prośba o podanie końca przedziału
        int end = scan.nextInt(); // Odczytanie wartości końcowej przedziału od użytkownika

        System.out.println("Liczby w przedziale od " + start + " do " + end + ":"); // Wypisanie informacji o przedziale
        for (int liczba = start; liczba <= end; liczba++) { // Pętla for od wartości start do end
            if (liczba % 2 == 0) { // Sprawdzenie, czy liczba jest parzysta
                System.out.print(liczba + " "); // Wypisanie liczby, jeśli jest parzysta
            }
        }

        scan.close(); // Opcjonalne zamknięcie obiektu Scanner
    }
}
