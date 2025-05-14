quantidade_moedas_1_real = int(input("Digite a quantidade de moedas de 1 real: "))
quantidade_moedas_50_centavos = int(input("Digite a quantidade de moedas de 50 centavos: "))
quantidade_moedas_25_centavos = int(input("Digite a quantidade de moedas de 25 centavos: "))
quantidade_moedas_10_centavos = int(input("Digite a quantidade de moedas de 10 centavos: "))
quantidade_moedas_5_centavos = int(input("Digite a quantidade de moedas de 5 centavos: "))
quantidade_moedas_1_centavo = int(input("Digite a quantidade de moedas de 1 centavo: "))

# Cálculo do total economizado
total_reais = (
    quantidade_moedas_1_real +
    (quantidade_moedas_50_centavos * 0.50) +
    (quantidade_moedas_25_centavos * 0.25) +
    (quantidade_moedas_10_centavos * 0.10) +
    (quantidade_moedas_5_centavos * 0.05) +
    (quantidade_moedas_1_centavo * 0.01)
)

print(f"Total economizado em reais: R$ {total_reais:.2f}\n")