# 14. Faça um algoritmo que receba o preço de um produto e calcule o novo preço com desconto de 10%.

# Dados
preco = float(input("Informe o preço do produto: "))

# Cálculo do novo preço com desconto
desconto = preco * 0.10
novo_preco = preco - desconto

# Resultado
print("O valor a ser pago é:", novo_preco)