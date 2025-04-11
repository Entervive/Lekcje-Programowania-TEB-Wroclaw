# Lekcja: Programowanie Obiektowe w Pythonie

Ten projekt zawiera notatnik Jupyter (`uczen.ipynb`), który wprowadza podstawowe pojęcia programowania obiektowego (OOP) w języku Python. Notatnik zawiera przykłady implementacji klas, atrybutów oraz metod.

## Zawartość Notatnika

Notatnik jest podzielony na sekcje, z których każda zawiera opis przykładu, definicję klasy oraz przykłady użycia. Oto lista przykładów:

1. **Klasa `Uczen` z metodą `przedstaw_sie`**

   - Reprezentuje ucznia z atrybutami takimi jak imię, nazwisko i wiek.
   - Zawiera metodę `przedstaw_sie`, która wypisuje dane ucznia w czytelnej formie.

2. **Klasa `Uczen` z dodatkowymi metodami**
   - Rozszerzona wersja klasy `Uczen` z dodatkowymi metodami:
     - `inna`: wypisuje komunikat i przedstawia ucznia.
     - `wprowadzanie`: pozwala na wprowadzenie danych ucznia z klawiatury.
     - `czy_pelnoletni`: sprawdza, czy uczeń jest pełnoletni (wiek >= 18).

## Jak korzystać z notatnika?

### 1. Uruchamianie w Visual Studio Code

1. **Instalacja rozszerzeń**:

   - Upewnij się, że masz zainstalowane Visual Studio Code.
   - Zainstaluj rozszerzenia:
     - [Jupyter](https://marketplace.visualstudio.com/items?itemName=ms-toolsai.jupyter)
     - [Python](https://marketplace.visualstudio.com/items?itemName=ms-python.python)

2. **Otwieranie notatnika**:

   - Otwórz folder projektu w Visual Studio Code.
   - Kliknij dwukrotnie na plik `uczen.ipynb`, aby go otworzyć.

3. **Wykonywanie kodu**:

   - Visual Studio Code automatycznie rozpozna plik jako notatnik Jupyter.
   - Kliknij ikonę ▶️ obok każdej komórki, aby ją wykonać, lub użyj skrótu `Shift + Enter`.

4. **Konfiguracja środowiska**:
   - Jeśli Visual Studio Code poprosi o wybór interpretera Python, wybierz ten, w którym masz zainstalowane Jupyter.

---

### 2. Uruchamianie w Jupyter Notebook

1. **Uruchomienie notatnika**:

   - Upewnij się, że masz zainstalowane środowisko Jupyter Notebook. Możesz je zainstalować za pomocą polecenia:
     ```bash
     pip install notebook
     ```
   - Otwórz terminal w folderze, w którym znajduje się plik [uczen.ipynb](http://_vscodecontentref_/0).
   - Uruchom notatnik za pomocą polecenia:
     ```bash
     jupyter notebook
     ```
   - W przeglądarce otworzy się interfejs Jupyter Notebook. Kliknij na plik [uczen.ipynb](http://_vscodecontentref_/1), aby go otworzyć.

2. **Wykonywanie kodu**:
   - Notatnik jest podzielony na komórki. Każda komórka zawiera kod lub opis w języku Markdown.
   - Aby wykonać kod w komórce, zaznacz ją i naciśnij `Shift + Enter`.

---

## Autor

- Aleksander Staszków

## Informacje dodatkowe

Notatnik będzie aktualizowany w przyszłości, aby zawierał więcej przykładów i zadań. Jeśli masz pytania lub sugestie, skontaktuj się z autorem projektu.
