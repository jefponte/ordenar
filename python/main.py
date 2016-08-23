def selection(lista):
    for i in range(0, len(lista)):
        menor = i
        for j in range(i, len(lista)):
            if lista[j] < lista[menor]:
                menor = j
        auxiliar = lista[i]
        lista[i] = lista[menor]
        lista[menor] = auxiliar
lista = [5, 3, 2, 4, 1]
print lista
selection(lista)
print "------------------"
print lista