public class podzielneLiczbyPetle {
    public static void main(String[] args) {
        for (int liczba = 1; liczba <= 100; liczba++) { // Pętla for od 1 do 100
            if (liczba % 5 == 0) { // Sprawdzenie podzielności przez 5
                System.out.println(liczba); // Wypisanie liczby jeśli jest podzielna przez oba
            }
        }
    }
}
