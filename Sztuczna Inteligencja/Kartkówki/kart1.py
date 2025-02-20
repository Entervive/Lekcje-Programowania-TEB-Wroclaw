def Wiek():
    wiek = int(input("Podaj swój rok urodzenia np 2000 "))

    if (wiek <= 2006):
        print("Użytkownik jest pełnoletni")
    else:
        print("Użytkownik nie jest pełnoletni")

def podzielne():
    for(i) in range (0, 31):
        if (i % 3 == 0):
            print(i)

def sumowanie():
    liczba = int(input("Podaj liczbę do sumowania "))
    wynik = liczba

    while(wynik <= 50):
        wynik += liczba
    
    print(wynik)