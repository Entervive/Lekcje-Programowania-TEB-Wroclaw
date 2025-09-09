public class zakresLiczbPetle {
    public static void main(String[] args) {
        int liczba = 1; // Inicjalizacja zmiennej liczba z wartością początkową 1

        while(liczba <= 50) { // Pętla while, która będzie działać dopóki liczba jest mniejsza lub równa 50
            System.out.println(liczba); // Wypisanie aktualnej wartości liczba
            liczba++; // Inkrementacja zmiennej liczba o 1
        }

        for (liczba = 51; liczba <= 100; liczba++) { // Pętla for, która inicjalizuje liczba na 51 i działa dopóki liczba jest mniejsza lub równa 100, zwiększając liczba o 1 w każdej iteracji
            System.out.println(liczba); // Wypisanie aktualnej wartości liczba
        }
    }
}
