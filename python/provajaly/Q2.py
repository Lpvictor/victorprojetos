sal=float(input("Informe seu salário: "))

if(sal <= 280):
    aum =sal * 0.20
    salf = sal + aum
    print("Salário atual: R$",sal, "\n20% de aumento \nAumento de: R$",aum, "\nSalário final: R$", salf)
elif(sal > 280) and (sal <= 700):
    aum =sal * 0.15
    salf = sal + aum
    print("Salário atual: R$", sal, "\n15% de aumento \nAumento de: R$",aum, "\nSalário final: R$", salf)
elif(sal > 700) and (sal <= 1500):
    aum =sal * 0.10
    salf = sal + aum
    print("Salário atual: R$", sal, "\n10% de aumento \nAumento de: R$",aum, "\nSalário final: R$", salf)
elif(sal > 1500):
    aum =sal * 0.05
    salf = sal + aum
    print("Salário atual: R$", sal, "\n5% de aumento \nAumento de: R$",aum, "\nSalário final: R$", salf)