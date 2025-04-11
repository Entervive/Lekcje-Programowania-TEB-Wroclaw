lista = []

#Pobierz od użytkownika 5 liczb i zapisz je do listy
for(i) in range(5):
    liczba = int(input("Podaj liczbę do wpisania "))
    lista.append(liczba)

#Wyświetl parzyste liczby w tej liście
for liczba in lista:
    if liczba % 2 == 0:
        print(liczba)

print(" ")

#Elemnty o parzystych indeksach
#Wersja A
for i in range(len(lista)):
    if(lista[i] % 2 == 0):
        print(lista[i])

print(" ")

#Wersja B
for i in range(0, len(lista), 2):
    print(lista[i])

#Wyświetl listę od końca czyli indeksy 4, 3, 2, 1, 0
for i in range(len(lista)-1, -1, -1):
    print(lista[i])