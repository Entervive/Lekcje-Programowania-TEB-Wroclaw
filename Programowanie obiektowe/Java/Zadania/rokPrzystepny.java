import java.util.Scanner; // Importowanie klasy Scanner do odczytu danych wejściowych

public class rokPrzystepny {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in); // Tworzenie obiektu Scanner do odczytu danych wejściowych

        System.out.println("Wpisz rok: "); // Prośba o wpisanie roku
        int rok = scan.nextInt(); // Odczytanie roku jako liczby całkowitej od użytkownika

        if ((rok % 4 == 0 && rok % 100 != 0) || (rok % 400 == 0)) { // Sprawdzenie, czy rok jest przestępny
            System.out.println("7Rok " + rok + " jest przestępny."); // Wypisanie informacji, że rok jest przestępny
        } else { // Jeśli rok nie jest przestępny czyli nie dzieli się przez 4 lub dzieli się przez 100 ale nie przez 400
            System.out.println("Rok " + rok + " nie jest przestępny."); // Wypisanie informacji, że rok nie jest przestępny
        }

        scan.close(); // Opcjonalne zamknięcie skanera
    }
}
