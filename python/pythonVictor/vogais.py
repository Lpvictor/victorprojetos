vogais = ('a', 'e', 'i', 'o', 'u')
digite = input("Digite alguma palavra ou frase:")
for x in vogais:
    for y in digite:
        if(x==y):
            print(y)