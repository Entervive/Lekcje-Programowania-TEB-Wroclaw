class Uczen:
    #Specjalna funkcja inicjalizująca obiekt
    def __init__(self, imie, nazwisko, wiek):
        self.imie = imie #Domyślne dane self.imie = "Ania"
        self.nazwisko = nazwisko
        self.wiek = wiek

    def przedstaw_sie(self):
        print(f'Nazywam się {self.imie} {self.nazwisko} i mam {self.wiek} lat.')

ucz1=Uczen('Jan', 'Kowalski', 15)
print(ucz1.imie)
ucz1.przedstaw_sie()