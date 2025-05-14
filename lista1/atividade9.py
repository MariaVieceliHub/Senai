total_refresco = float(input("Digite quantos litros de refresco você deseja fazer: "))

litros_agua = (8 / 10) * total_refresco
litros_suco = (2 / 10) * total_refresco

print(f"Para fazer {total_refresco} litros de refresco, você precisará de:")
print(f"{litros_agua:.2f} litros de água mineral")
print(f"{litros_suco:.2f} litros de suco de maracujá")