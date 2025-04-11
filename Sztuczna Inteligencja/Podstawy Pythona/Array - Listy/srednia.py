import random

liczby = []

for i in range(100):
    liczby.append(random.randint(1, 10))

print(liczby)

#Oblicz średnią liczb w liście
suma = 0
for liczba in liczby:
    suma += liczba

print(suma)
srednia = suma/len(liczby)
print(srednia)

minimum = liczby[0]

for liczba in liczby:
    if liczba < minimum:
        minimum = liczba

print(minimum)

maksimum = liczby[0]

for liczba in liczby:
    if liczba > maksimum:
        maksimum = liczba

print(maksimum)