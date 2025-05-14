import math
# Entrada: valores dos catetos
cateto1 = float(input("Cateto 1: "))
cateto2 = float(input("Cateto 2: "))

# Calcula a hipotenusa usando Pitágoras
hipotenusa = math.sqrt(cateto1 ** 2 + cateto2 ** 2)

# Exibe o resultado
print("Hipotenusa:", hipotenusa)