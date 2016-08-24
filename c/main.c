#include <stdio.h>

void print_lista(int *lista, int n){
	int i;
	for(i = 0; i < n; i++){
		printf("%d, ", lista[i]);


	}
	printf("\n------------------\n");
}


void selection(int *lista, int n){
	int i, j, menor, auxiliar;
	for(i = 0; i < n; i++){
		menor = i;
		for(j = i; j < n; j++){
			if(lista[j] < lista[menor]){
				auxiliar = lista[j];
				lista[j] = lista[menor];
				lista[menor] = auxiliar;
			}
		}
	}
}

void insertion(int *lista, int n){
	int i, j, eleito;
	for(i = 1; i < n; i++){
		eleito = lista[i];
		for(j = i; j > 0 && eleito < lista[j-1]; j--){
			lista[j]= lista[j-1];
		}
		lista[j] = eleito;
	}
}

int main(){
	int lista[5] = {5, 3, 2, 1, 4};
	print_lista(lista, 5);
	insertion(lista, 5);
	print_lista(lista, 5);

	return 0;

}
