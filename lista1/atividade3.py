horas_normais = float(input("Horas normais: "))
horas_extras = float(input("Horas extras: "))
salario_bruto = (horas_normais * 10) + (horas_extras * 15)
salario_liquido = salario_bruto * 0.9
print(f"Bruto: R${salario_bruto}, Líquido: R${salario_liquido}")