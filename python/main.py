def selection(lista):
    for i in range(0, len(lista)):
        menor = i
        for j in range(i, len(lista)):
            if lista[j] < lista[menor]:
                menor = j
        auxiliar = lista[i]
        lista[i] = lista[menor]
        lista[menor] = auxiliar
def insertion(lista):
	for i in range(1, len(lista)):
		eleito = lista[i]
		j = i
		while j > 0 and eleito < lista[j-1]:
			lista[j] = lista[j-1]
			j = j - 1
		lista[j] = eleito
def bubble(lista):
	for i in range(0, len(lista)):
		for j in range(len(lista)-1, i, -1):
			if lista[j] < lista[j-1]:
				lista[j], lista[j-1] = lista[j-1], lista[j]
		
		
lista = [5, 3, 2, 4, 1]
print lista
bubble(lista)
print "------------------"
print lista