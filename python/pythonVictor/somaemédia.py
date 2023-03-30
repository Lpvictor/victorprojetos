num = []
n = 0
while n < 5:
    val= int(input("Digite 5 números: "))
    num.append(val)
    n+=1
soma = sum(num)
media = soma/n

print("Soma:",soma)
print("Média:",media)