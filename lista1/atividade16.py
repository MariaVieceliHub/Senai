peso = float(input("Digite o seu peso: "))#pede o peso
#se engordar 15%
valor_engordar = peso * 0.15
#se emagrecer 20%
valor_emagrecer = peso * 0.20

emagrecer = peso - valor_emagrecer
engordar = peso + valor_engordar
#exibe
print("Se a você emagrecer 20% vai pesar",emagrecer,"KGs")
print("Se a você engordar 15% vai pesar",engordar,"KGs")
