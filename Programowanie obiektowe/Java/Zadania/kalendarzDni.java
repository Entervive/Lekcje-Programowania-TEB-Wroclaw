import java.util.*; // Importowanie klasy Scanner do odczytu danych wejściowych

public class kalendarzDni {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in); // Tworzenie obiektu Scanner do odczytu danych wejściowych

        System.out.println("Wpisz liczbę: "); // Prośba o wpisanie liczby
        int liczba = scan.nextInt(); // Odczytanie liczby całkowitej od użytkownika tutaj przechwytujemy liczbę z terminala

        switch (liczba) {
            case 1:
                System.out.println("Poniedziałek");
                break;
            case 2:
                System.out.println("Wtorek");
                break;
            case 3:
                System.out.println("Środa");
                break;
            case 4:
                System.out.println("Czwartek");
                break;
            case 5:
                System.out.println("Piątek");
                break;
            case 6:
                System.out.println("Sobota");
                break;
            case 7:
                System.out.println("Niedziela");
                break;
            default:
                System.out.println("Poza zakresem");
                break;
        }

    scan.close(); // Opcjonalne zamknięcie skanera
    }
}
