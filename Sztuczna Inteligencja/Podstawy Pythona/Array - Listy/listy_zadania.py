#Wylosuj liczbę z zakresu 1-400. n podaje użytkownik
#Oblicz średnią podanych liczb
#Oblicz max i min
#W miejsce wszystkich elementów o wartościach nieparzystych wpisz 10
#Sprawdź ile w liście jest elementów o wartościach mniejszych od 20
#Podziel listę na dwie mniejsze listy. Listy powinny mieć tyle samo elementów, lub róznić się co najwyżej o jeden.

import random

# Wczytanie liczby elementów
n = int(input("Podaj liczbę elementów w liście (n): "))

# Tworzenie listy wylosowanych liczb
numbers = []
for i in range(n):
    numbers.append(random.randint(1, 400))
print("Wylosowana lista:", numbers)

# Obliczanie średniej
suma = 0
for liczba in numbers:
    suma += liczba
srednia = suma / len(numbers)
print("Średnia:", srednia)

# Znajdowanie minimum i maksimum
minimum = numbers[0]
maksimum = numbers[0]
for liczba in numbers:
    if liczba < minimum:
        minimum = liczba
    if liczba > maksimum:
        maksimum = liczba
print("Minimum:", minimum)
print("Maksimum:", maksimum)

# Zamiana nieparzystych na 10
for i in range(len(numbers)):
    if numbers[i] % 2 != 0:
        numbers[i] = 10
print("Lista po zamianie nieparzystych na 10:", numbers)

# Liczenie elementów mniejszych od 20
licznik = 0
for liczba in numbers:
    if liczba < 20:
        licznik += 1
print("Liczba elementów mniejszych od 20:", licznik)

# Dzielenie listy na dwie mniejsze
srodek = len(numbers) // 2
lista1 = []
lista2 = []
for i in range(len(numbers)):
    if i < srodek:
        lista1.append(numbers[i])
    else:
        lista2.append(numbers[i])
        
print("Pierwsza mniejsza lista:", lista1)
print("Druga mniejsza lista:", lista2)

#Sposób B
polowa = len(numbers) // 2
lista1 = numbers[:polowa]
lista = numbers[polowa:]