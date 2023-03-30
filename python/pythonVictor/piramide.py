def nesc(n):
    n1 = 1
    for x in range(0,n):
        n1 = 1
        for y in range(0, x+1):

            print(n1, end="")
            n1 += 1
        print("\r")
nesc(int(input("Digite o valor que a píramide irá imprimir: ")))