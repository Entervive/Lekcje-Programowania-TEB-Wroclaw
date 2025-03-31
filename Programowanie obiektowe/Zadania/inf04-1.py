class film:
    def __init__(self, tytul="", liczbaWypozyczen=0):
        self.tytul = tytul
        self.liczbaWypozyczen = liczbaWypozyczen

    def setTytul(self, nowyTytul):
        self.tytul = nowyTytul
    
    def getTytul(self):
        return self.tytul

film1 = film()
print(film1.tytul, film1.liczbaWypozyczen)
film1.setTytul(input("Podaj tytul filmu: "))
print(film1.tytul, film1.liczbaWypozyczen)