def problemm(c0: int) -> int:
    i = 0
    while c0 != 1:
        i += 1
        if c0 % 2 == 0:
            c0 /= 2
        else:
            c0 = 3 * c0 + 1
    return i

liczba = int(input("Podaj liczbę "))
print(problemm(liczba))