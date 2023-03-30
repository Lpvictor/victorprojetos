def nesc(n):

    for x in range(n + 1):
        n1 = x
        print("\r")
        for y in range(n1):
            print(n1, end="")
nesc(int(input("Digite o valor que a píramide irá imprimir: ")))