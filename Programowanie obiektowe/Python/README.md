# Programowanie Obiektowe w Pythonie

Ten projekt zawiera materiały edukacyjne dotyczące programowania obiektowego (OOP) w języku Python. Składa się z dwóch głównych folderów: `Nauka` i `Zadania`, które zawierają notatniki Jupyter oraz przykłady kodu i zadania.

## Struktura projektu

### 1. Folder `Nauka`

Zawiera materiały wprowadzające do programowania obiektowego, w tym notatnik Jupyter oraz przykłady implementacji klas, atrybutów i metod.

- **Notatnik Jupyter**: `uczen.ipynb`

  - Przykłady klas, takich jak `Uczen`, z metodami:
    - `przedstaw_sie`: wypisuje dane ucznia.
    - `inna`: dodatkowa metoda do przedstawiania ucznia.
    - `wprowadzanie`: umożliwia wprowadzenie danych ucznia.
    - `czy_pelnoletni`: sprawdza, czy uczeń jest pełnoletni.

- **Przykłady kodu**:
  - `program1.py`: Klasa `Uczen` z metodą `przedstaw_sie`.
  - `program3.py`: Rozszerzona klasa `Uczen` z dodatkowymi metodami.

### 2. Folder `Zadania`

Zawiera zadania praktyczne związane z programowaniem obiektowym, w tym notatnik Jupyter oraz pliki z kodem.

- **Notatnik Jupyter**: `zadania.ipynb`

  - Zadania obejmujące implementację klas:
    - `Osoba`: Reprezentuje osobę z atrybutami imię, nazwisko, wiek i status ucznia TEB.
    - `PojazadMechaniczny`: Reprezentuje pojazd mechaniczny z różnymi atrybutami.
    - `Samochod`: Reprezentuje samochód z atrybutami marka, model, cena i status bezwypadkowości.
    - `film`: Reprezentuje film z atrybutami tytuł i liczba wypożyczeń.

- **Przykłady kodu**:
  - `zadania_samochody.py`: Klasa `Samochod` z metodą `auto_info`.
  - `zadanie_pojazdy_auta.py`: Klasa `PojazadMechaniczny` z metodą `auto`.
  - `zadanie_egzaminacyjne_INF04.py`: Klasa `film` z metodami `setTytul` i `getTytul`.

## Jak korzystać z projektu?

### Visual Studio Code

1. **Instalacja rozszerzeń**:
   - [Jupyter](https://marketplace.visualstudio.com/items?itemName=ms-toolsai.jupyter)
   - [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python)
2. **Otwieranie notatników**:
   - Otwórz folder projektu w Visual Studio Code.
   - Kliknij dwukrotnie na plik `uczen.ipynb` lub `zadania.ipynb`.
3. **Wykonywanie kodu**:
   - Kliknij ikonę ▶️ obok każdej komórki lub użyj `Shift + Enter`.

### Jupyter Notebook

1. **Uruchomienie notatnika**:
   - Zainstaluj Jupyter Notebook za pomocą:
     ```bash
     pip install notebook
     ```
   - Uruchom notatnik za pomocą:
     ```bash
     jupyter notebook
     ```
   - Otwórz plik [uczen.ipynb](http://_vscodecontentref_/0) lub [zadania.ipynb](http://_vscodecontentref_/1).

## Autor

- Aleksander Staszków

## Informacje dodatkowe

Projekt będzie rozwijany w przyszłości, aby zawierał więcej przykładów i zadań. W razie pytań lub sugestii skontaktuj się z autorem.
