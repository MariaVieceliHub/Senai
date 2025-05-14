soma = 0
n = 3

for i in range(1, n + 1):
    numero = float(input(f"digite o {i}º numero:"))
    soma += numero


multiplicacao = soma / n 
print("A media dos numeros digitados é:", multiplicacao)