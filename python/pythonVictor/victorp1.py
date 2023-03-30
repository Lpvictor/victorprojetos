a =int(input(("Digite o tamanho do primeiro lado: ")))
b =int(input(("Digite o tamanho do segundo lado: ")))
c =int(input(("Digite o tamanho do terceiro lado: ")))
if(a == b and b==c and c==a)  :
    print("Equilátero")
elif(a == b or b==c or c==a):
    print("Isóceles")
elif(a != b and b != c and c != a):
    print("Escaleno")

