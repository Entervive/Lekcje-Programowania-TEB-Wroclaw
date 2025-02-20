for i in range(1, 11):
    print(i)

print('-----------')

for i in range(10):
    print(i)

slowo = "wtorek"
for litera in slowo:
    print(litera, end="-")

#Od 1 do 10 z skokiem o 2
for i in range(1, 10, 2):
    print(i)

imie = input("Podaj imię ")
while(imie != "Janek"):
    print("Błędne imię")
    imie = input("Podaj imię")

for i in range(1, 101):
    print(i)