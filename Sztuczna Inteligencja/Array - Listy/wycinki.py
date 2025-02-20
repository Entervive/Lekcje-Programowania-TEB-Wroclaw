lista = [1, 3, 4, 6, 10, 13, 2, 1]

lista2 = lista
lista2.append(9)

print(lista)
print(lista2)

#kopia listy
lista3 = lista[:]
lista3.append(4)
print(lista, lista3)

a = 10
b = a
a = 12
print(a, b)

#wycinki
lista = [1,2,3,4,5,6,7,8]
elementy = lista[1:3]
print(elementy)
elementy = lista[3:1]
print(elementy)

#weż pierwsze trzy elementy
elementy = lista[0:3]
elementy = lista[:3]

#weż ostatnie trzy elementy
elementy = lista[-3]
elementy = lista[-3:len(lista)]