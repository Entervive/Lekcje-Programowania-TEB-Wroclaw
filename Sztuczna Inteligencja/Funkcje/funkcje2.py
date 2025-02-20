def suma(a=666, b=666):
    return a + b

liczba = suma(4, 3)
print(liczba)
print(suma())

def iloczyn(a, b):
    return a * b

print(iloczyn(2, 3))
print(iloczyn(3.4, 2))

def iloczyn2(a: int, b: int) -> int:
    return a * b

print(iloczyn2(2, 3))