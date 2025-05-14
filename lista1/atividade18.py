# 18. Faça um algoritmo que calcule e mostre a área de um trapézio. 
# Sabe-se que: A = (base maior + base menor)* altura)/2 ; ,,0,,

base_maior = float(input("Insira o tamanho a base maior: "))
base_menor = float(input("Insira o tamanho a base menor: "))
altura = float(input("Insira a altura: "))

A = ((base_maior + base_menor) * altura) /2

print("A área do trapézio é: ",A)