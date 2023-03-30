nota = float(input("Digite uma nota"))

if(nota <= 5):
    print("Reprovado")
elif(nota>=5.1) and (nota<=5.9):
    print("Recuperaçao")
elif(nota >= 6):
    print("Aprovado")
