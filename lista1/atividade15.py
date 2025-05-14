# @title Questão 15
# Recebendo os dados do usuário
salario_fixo = float(input("Digite o salário fixo do funcionário: "))
valor_vendas = float(input("Digite o valor total das vendas: "))

# Calculando a comissão
comissao = valor_vendas * 0.04  # Comissão de 4%

# Calculando o salário final
salario_final = salario_fixo + comissao

# Mostrando o resultado
print("A comissão do funcionário é de: R$", comissao)
print("O salário final do funcionário é de: R$", salario_final)