def mojaFunkcja():
    a = 2
    b = 5
    print(f'a + b = {a + b}')

a = 10
mojaFunkcja()
print(f'a')

def przywitanie(imie):
    print(f'Witaj, {imie}!')

przywitanie('Aleksander')

def przywitanie2(imie, nazwisko):
    print(f'Witaj, {imie} {nazwisko}!')

przywitanie2('Aleksander', 'Staszków')

przywitanie2(input("Podaj swoje imie"), input("Podaj swoje nazwisko"))

def przywitanie3(imei='Tymoteusz', nazwisko='Iksde'):
    print(f'Witaj, {imei} {nazwisko}!')

przywitanie3('Jan')
przywitanie3('Jan', 'Nowak')
przywitanie3(nazwisko='kubiak')