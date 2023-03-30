lista = []

count=0
count2=0
count3=0
count4=0
lista.append(float(input("Digite valores aleatórios: ")))
for x in lista:
       if (x < 0):
           print("Este número é inválido")
           break
       else:
           lista.append(float(input("Digite valores aleatórios: ")))
for y in lista:
    if(y >= 0) and (y <= 25):
        count+=1
    elif(y >= 26) and (y <= 50):
        count2+=1
    elif(y >= 51) and (y <= 75):
        count3+=1
    elif(y >= 76) and (y <= 100):
        count4+=1
print("Números entre 0-25: ",count,
      "\nNúmeros entre 26-50",count2,
      "\nNúmeros entre 51-75",count3,
      "\nNúmeros entre 76-100",count4)

