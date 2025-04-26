# 1. Suma liczb w liście
# Funkcja przyjmuje listę liczb całkowitych i zwraca ich sumę.
lista = [1, 2, 3, 4, 5]

def suma_liczb(lista):
    return sum(lista)

print(suma_liczb(lista))

# 2. Liczba wystąpień znaku w napisie
# Funkcja przyjmuje napis oraz znak, a zwraca liczbę jego wystąpień w napisie.
tekst = "Ala ma kota" 
napis = "Ala ma kota"
znak = "a"

def licz_wystapienia(tekst, znak):
    return tekst.count(znak)

print(licz_wystapienia(napis, znak))

# 3. Maksymalna liczba w liście
# Funkcja przyjmuje listę liczb i zwraca największą liczbę.
def maksimum(lista):
    return max(lista)

print(maksimum(lista))

# 4. Odwracanie napisu
# Funkcja przyjmuje napis i zwraca ten sam napis odwrócony.
def odwroc_napis(napis):
    return napis[::-1]

print(odwroc_napis(napis))

# 8. Suma cyfr liczby
# Funkcja przyjmuje liczbę całkowitą i zwraca sumę jej cyfr.
def suma_cyfr(liczba):
    suma = 0
    while liczba > 0:
        suma += liczba % 10
        liczba //= 10
    return suma

print(suma_cyfr(12345))

# 10. Średnia arytmetyczna
# Funkcja przyjmuje listę liczb i zwraca ich średnią arytmetyczną.
def srednia(lista):
    return sum(lista) / len(lista)

print(srednia(lista))
