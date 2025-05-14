ano_nasc = int(input("Ano de nascimento: "))
ano_atual = int(input("Ano atual: "))
anos = ano_atual - ano_nasc
meses = anos * 12
dias = anos * 365
semanas = dias / 7
print(f"Idade: {anos} anos, {meses} meses, {dias} dias, {semanas:.1f} semanas")