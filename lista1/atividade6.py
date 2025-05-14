coca1 = float(input("Insira a quantidade que deseja compra de garrfa de 350ml : "))
coca2 = float(input("Insira a quantidade que deseja compra de garrfa de 600ml : "))
coca3 = float(input("Insira a quantidade que deseja compra de garrfa de 2L    : "))

#Calculo
ml1 = coca1 * 350
ml2 = coca2 * 600 
ml3 = coca3 * 2000 # 2 litros e igual 2000ml
resultado = ml1 + ml2 + ml3

print(f"A Quantidade de litro comprada é : {resultado:.0f} ml")#:.0f fica estetico sem casas decimais a mais