import matplotlib.pyplot as plt
import numpy

coordx = input("Coloque a coordenada X: ")
coordy = input("Coloque a coordenada Y: ")

x = [int(i) for i in coordx.split(',')]
y = [int(i) for i in coordy.split(',')]

plt.plot(x, y, 'ro')
plt.xlim(0, max(x)+1)
plt.ylim(0, max(y)+1)

plt.grid()
plt.xlabel('x-values')
plt.ylabel('y-values')


plt.show()