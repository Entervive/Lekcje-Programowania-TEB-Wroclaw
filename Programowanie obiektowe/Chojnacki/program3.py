class Uczen:
    #Specjalna funkcja inicjalizująca obiekt
    def __init__(self, imie="", nazwisko="", wiek=20):
        self.imie = imie
        self.nazwisko = nazwisko
        self.wiek = wiek

    def inna(self):
        print('To jest metoda inna')
        print(f'Nazywam się {self.imie} {self.nazwisko}.')

    def wprowadzanie(self):
        self.imie = input('Podaj imię: ')
        self.nazwisko = input('Podaj nazwisko: ')

    def czy_pelnoletni(self):
        if self.wiek >= 18:
            return True
        else:
            return False

ucz1=Uczen('Jan', 'Kowalski', 20)
ucz2=Uczen('Anna', 'Nowak', 21)
ucz3=Uczen('Piotr', 'Wiśniewski', 16)

if ucz1.czy_pelnoletni():
    print(f'{ucz1.imie} jest pełnoletni.')
#inna() - błąd taka funkcja nie istnieje
#ucz1.inna() - funckja zostanie wywołanie jeśli zostanie dodany argument self