def piramida(bloczki):
    print(bloczki)

kloc = 6
wysokosc = 0

for i in range(kloc):
    if (kloc >= 0):
        kloc -= i
        wysokosc += 1
    else:
        break

print(wysokosc)