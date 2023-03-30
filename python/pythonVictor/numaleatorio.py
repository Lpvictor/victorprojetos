import random2
lista = [random2.randint(0,9), random2.randint(0,9),random2.randint(0,9),random2.randint(0,9),random2.randint(0,9),random2.randint(0,9)]
y = 0
for x in lista:
    if(x %2 == 0):
          y = x + 3
          print(x, "+ 3 = ",y)
    elif(x %2 == 1):
         y = x * 2
         print(x, "* 2 = ",y)