slownik = {
    1: "jeden",
    2: "dwa",
    3: "trzy",
    4: "jeden",
}

#dodanie wartości
slownik[5] = "pięć"
print(slownik)
print(len(slownik))
slownik[4] = "cztery"

#operator in
if 4 in slownik:
    print(f"0 jest kluczem 4")

#odczytywanie wartości
print(slownik[3])