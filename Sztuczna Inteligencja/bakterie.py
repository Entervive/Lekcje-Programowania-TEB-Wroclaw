def minimalne_bakterie(N):
    poczatkowe_bakterie = bin(N).count('1')  # Liczba jedynek w binarnej reprezentacji N
    operacje = []  # Lista operacji: (dzień, ile dodano)

    dzien = 0
    aktualne_bakterie = 0
    while N > 0:
        if N % 2 == 1:
            operacje.append((dzien, 1))  # Dodajemy bakterie w danym dniu
            aktualne_bakterie += 1
        N //= 2
        dzien += 1  # Przechodzimy do następnego dnia

    return poczatkowe_bakterie, operacje

# Przykładowe wywołanie
N = int(input("Podaj liczbę N: "))
min_bakterie, operacje = minimalne_bakterie(N)

print(f"Minimalna liczba początkowych bakterii: {min_bakterie}")
print("Harmonogram dodawania bakterii:")
for dzien, ilosc in operacje:
    print(f"Dzień {dzien}: dodaj {ilosc} bakterii")
