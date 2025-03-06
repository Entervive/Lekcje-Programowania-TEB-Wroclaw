class Samochod:#Wartość domyślną określa się przez czybezwypadkowy=True
    def __init__(self, marka, model, cena, czybezwypadkowy=True):
        self.marka = marka
        self.model = model
        self.cena = cena
        self.czybezwypadkowy = czybezwypadkowy

    def auto_info(self):
        print(f'Marka: {self.marka}')
        print(f'Model: {self.model}')
        print(f'Cena: {self.cena}')
        if self.czybezwypadkowy:
            print('Auto bezwypadkowe')
        else:
            print('Auto uszkodzone')

auto1 = Samochod('Opel', 'Astra', 29000)
auto2 = Samochod('Fiat', 'Tipo', 2500)


auto1.auto_info()