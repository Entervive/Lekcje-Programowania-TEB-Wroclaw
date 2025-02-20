slownik_pl_en = {
    "pies": "dog",
    "kot": "cat",
    "małapa": "monkey",
    "ptak": "bird",
}

for klucz in slownik_pl_en.keys():
    print(klucz)
    print(slownik_pl_en[klucz])

for wartosc in slownik_pl_en.values():
    print(wartosc)

for klucz, wartosc in slownik_pl_en.items():
    print(f"{klucz}: {wartosc}")

# Zadanie:
# Poproś użytkownika o podanie 5 słów w języku polskim i ich tłumaczenie

for i in range(5):
    slowo_pl = input("Podaj słowo w języku polskim: ")
    slowo_en = input("Podaj tłumaczenie słowa w języku angielskim: ")

    slownik_pl_en[slowo_pl] = slowo_en
