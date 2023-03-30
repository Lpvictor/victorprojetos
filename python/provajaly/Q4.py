lista = []

count=0
count2=0
count3=0
lista.append(float(input("Digite valores aleatórios: ")))
for x in lista:
       if (x == -1):
           print("-1 é inválido")
           break

       else:
           lista.append(float(input("Digite valores aleatórios: ")))
           count+=1
           soma1 = sum(lista)
           soma2 = soma1 + 1
           media = soma2/count
for y in lista:
    if (y > media):
        count2+=1
    elif(y < 7):
        count3+=1

print("Quantidade de valores lidos: ", count,
      "\nValores informados: ", lista,
      "\nSoma dos valores: ", soma2,
      "\nMedia: ", media,
      "\nNúmeros maiores que média: ", count2,
      "\nNúmeros menores que 7: ", count3)


