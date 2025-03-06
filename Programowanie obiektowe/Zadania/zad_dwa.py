class PojazadMechaniczny:
    def __init__(self, rodzaj_pojazdu, ilosc_kol, rodzaj_paliwa, masa, moc_silnika, ilosc_miejsc_siedzacych):
        self.rodzaj_pojazdu = rodzaj_pojazdu
        self.ilosc_kol = ilosc_kol
        self.rodzaj_paliwa = rodzaj_paliwa
        self.masa = masa
        self.moc_silnika = moc_silnika
        self.ilosc_miejsc_siedzacych = ilosc_miejsc_siedzacych
    
    def auto(self):
        print(f'Rodzaj pojazdu: {self.rodzaj_pojazdu}')
        print(f'Ilość kół: {self.ilosc_kol}')
        print(f'Ilość paliwa: {self.rodzaj_paliwa}')
        print(f'Masa pojazdu: {self.masa}')
        print(f'Moc silnika: {self.moc_silnika}')
        print(f'Ilość miejsc siedzących: {self.ilosc_miejsc_siedzacych}')

auto1 = PojazadMechaniczny('osobowy', 4, 'benzyna', 4200, 92, 5)
auto2 = PojazadMechaniczny('Ciężarowy', 3, 'dizel', 9500, 120, 3)

auto2.auto()

class Osoba:
    def __init__(self, imie, nazwisko, wiek, czy_uczen_teb=True):
        self.imie = imie
        self.nazwisko = nazwisko
        self.wiek = wiek
        self.czy_uczen_teb = czy_uczen_teb

uczen1 = Osoba(imie='Jan', nazwisko='Nowak', wiek=17)
uczen2 = Osoba(imie='Ania', nazwisko='Kowalska', wiek=15, czy_uczen_teb=False)