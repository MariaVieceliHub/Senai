altura_pessoa = float(input("Digite sua altura: "))
sombra_pessoa = float(input("Digite a altura da sua sombra: "))
sombra_predio = float(input("Digite a sombra do prédio: "))
# Cálculo da altura do prédio
altura_predio = (altura_pessoa * sombra_predio) / sombra_pessoa
print(f"A altura total do prédio é de {altura_predio} metros")