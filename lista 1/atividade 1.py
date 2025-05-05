 # Algoritmo para calcular a quantidade de ingredientes necessários para fazer uma quantidade de sanduíches

# Entrada: quantidade de sanduíches a fazer
quantidade_sanduiches = int(input("Digite a quantidade de sanduíches a fazer: "))

# Peso de cada ingrediente por sanduíche
peso_queijo_kg = 0.05  # 50g convertidos para kg
peso_presunto_kg = 0.05  # 50g convertidos para kg
peso_hamburguer_kg = 0.1  # 100g convertidos para kg

# Cálculo da quantidade total de ingredientes necessários
total_queijo = quantidade_sanduiches * peso_queijo_kg
total_presunto = quantidade_sanduiches * peso_presunto_kg
total_hamburguer = quantidade_sanduiches * peso_hamburguer_kg

# Saída: mostrar as quantidades necessárias em quilos
print(f"Para fazer {quantidade_sanduiches} sanduíches, você precisa de:")
print(f"{total_queijo:.2f} kg de queijo")
print(f"{total_presunto:.2f} kg de presunto")
print(f"{total_hamburguer:.2f} kg de carne (hambúrguer)")