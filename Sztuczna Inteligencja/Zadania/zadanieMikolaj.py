import random

def mikolaj(n):
    udzwigPlecaka = 50
    masaPrezentow = [random.randint(1, 40) for i in range(n)]
    pojemnoscPlecaka = 0
    kursy = 0

    for prezent in masaPrezentow:
        if(pojemnoscPlecaka <= udzwigPlecaka ):
            pojemnoscPlecaka += prezent

        else:
            kursy += 1
            pojemnoscPlecaka = 0

    print("Liczba kursów: ", kursy)
    print("Masa prezentów: ", masaPrezentow)
    print("Udźwig plecaka: ", udzwigPlecaka)

mikolaj(15)

# Wersja B

def prezenty(pojemnosc: int, lista: list[int]) -> int:
    kursy = 0
    aktualna_pojemnosc = 0
    for prezent in lista:
        if aktualna_pojemnosc + prezent <= pojemnosc:
            aktualna_pojemnosc += prezent
        else:
            kursy += 1
            aktualna_pojemnosc = prezent
    return kursy

lista_prezentow = [random.randint(1, 100) for i in range(10)]
print(prezenty(100, lista_prezentow))