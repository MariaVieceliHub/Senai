# Recebendo as notas do usuário
nota1 = float(input("Digite a primeira nota (peso 2): "))
nota2 = float(input("Digite a segunda nota (peso 3): "))

# Calculando a média ponderada
media_ponderada = (2 * nota1 + 3 * nota2) / (2 + 3)

# Mostrando o resultado
print("A média ponderada das notas é: ", media_ponderada)