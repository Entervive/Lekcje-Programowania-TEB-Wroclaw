# Zad 1
# Napisz funkcję, która przyjmuje jako argument liczbę całkowitą n oraz ciąg tekstowy s. Zadaniem funkcji jest zwrócenie
# ciągu tekstowego, który składa się z n powtórzonych ciagów s rozdzielonych spacją.

# Zad 2
# Napisz funkcję, która przyjmuje liczbę całkowitą a oraz b i sprawdza czy liczba a jest podzielna przez b.
# Zwracany jest typ bool(True/False).

# Zad 3
# Napisz funkcję, która przyjmuje jako argumenty trzy wymiary prostopoadłościanu (a, b, h).
# Funckja powinna sprawdzać czy wymiary są poprawne oraz zwracać w postaciu krotki odpowiednio pole powierzchni i objętość.

def zadJeden(n, s):
    return (s + " ") * n

print(zadJeden(1, "test"))

def zadDwa(a, b):
    return a % b == 0

print(zadDwa(10, 5))

def zadTrzy(a, b, c):
    if a <= 0 or b <= 0 or c <= 0:
        return "Wymiary niepoprawne"
    pole = (2 * a * b) + (2 * a * c) + (2 * b * c)
    v = a * b * c
    return (pole, v)

print(zadTrzy(2, 3, 4)) 