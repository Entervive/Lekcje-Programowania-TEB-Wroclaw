#Pooriś użytkownika o podanie 10 liczb i wpisz je do listy
def wpisywanie():
    lista = []

    for(i) in range(0, 10):
        liczba = int(input("Podaj liczbę do wpisania do tabeli "))

        lista.append(liczba)

    #Wypisanie wszystkich zawartości z listy za pomocą pętli
    for n in lista:
        print(n)