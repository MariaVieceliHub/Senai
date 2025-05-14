# Solicitando os valores ao usuário
salario_minimo = float(input("Digite o valor do salário mínimo: "))
salario_bruto = float(input("Digite o salário bruto do funcionário: "))

# Validando os valores
if salario_minimo <= 0 or salario_bruto <= 0:
    print("Erro: Os valores de salário mínimo e salário bruto devem ser maiores que zero.")
    exit()  # Encerra o programa se os valores forem inválidos

# Calculando o número de salários mínimos
numero_salarios_minimos = salario_bruto / salario_minimo

# Mostrando o resultado
print(f"O funcionário ganha {numero_salarios_minimos:.2f} salários mínimos.")    