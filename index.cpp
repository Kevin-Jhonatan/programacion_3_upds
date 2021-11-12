/* Biblioteca donde se encuentra la función cout */
#include<iostream>
/* uso del espacio de nombre std */
using namespace std;
/* inicio del método main */
int main() {
    int i = 9;
    /* Valor del puntero = 0  */
    int* puntero;

    /* Posicion o direccion de la variable i en la memoria */
    puntero = &i;
	std::cout << "La direccion de la memoria es : " << puntero << endl; 
	std::cout << "El valor de la variable i = " << i << endl;
}