package Java.Nauka;
// Importowanie klasy Scanner do odczytu danych wejściowych
import java.util.*;

// Definicja klasy drugaLekcja
public class drugaLekcja {
    // Główna metoda programu
    public static void main(String[] args) {
        // Tworzenie obiektu Scanner do odczytu danych wejściowych
        Scanner scan = new Scanner(System.in);

        // Prośba o wpisanie liczby
        System.out.println("Wpisz liczbę: ");
        // Odczytanie liczby całkowitej od użytkownika tutaj przechwytujemy liczbę z terminala
        int liczba = scan.nextInt();

        // Instrukcja switch do wyboru odpowiedniej akcji na podstawie wartości liczby
        // W zależności od wartości liczby, wypisujemy odpowiednią ocenę
        switch (liczba) {
            case 1: // Jeśli liczba to 1
                System.out.println("Niedostateczny"); // Wypisanie oceny "Niedostateczny"
                break; // Przerwanie działania switch gdy go brakuje to wykonuje się kolejny case do końca lub do break
            case 2:
                System.out.println("Niedopuszczający");
                break;
            case 3:
                System.out.println("Dostateczny");
                break;
            // Default jest opcjonalny i wykona się gdy żaden z powyższych case nie pasuje
            default:
                System.out.println("Poza zakresem");
        }

        if(liczba % 2 == 0) { // Sprawdzenie, czy liczba jest parzysta
            System.out.println("Liczba jest parzysta"); // Wypisanie informacji o parzystości
        } else if (liczba > 10) { // Sprawdzenie, czy liczba jest większa niż 10
            System.out.println("Liczba jest większa niż 10"); // Wypisanie informacji o wielkości liczby
        } else { // Jeśli żadna z powyższych warunków nie jest spełniona
            System.out.println("Liczba jest nieparzysta i mniejsza lub równa 10"); // Wypisanie informacji o nieparzystości i wielkości liczby
        }
        // W instrukcjach warunkowych możemy używać operatorów logicznych
        // Znak && oznacza "i" (oba warunki muszą być prawdziwe)
        // Znak || oznacza "lub" (jeden z warunków musi być prawdziwy)

        while (liczba <= 10) { // Pętla while, która wykonuje się dopóki liczba jest mniejsza lub równa 10
            System.out.println("Liczba: " + liczba); // Wypisanie aktualnej wartości liczby
            liczba++; // Inkrementacja liczby o 1 (odpowiednik liczba = liczba + 1)
        }

        for (int i = 0; i < 5; i++) { // Pętla for, która wykonuje się 5 razy
            System.out.println("Iteracja: " + i); // Wypisanie aktualnej iteracji
        }

    scan.close(); // Opcjonalne zamknięcie skanera
    }
}
