import matplotlib.pyplot as plt
import numpy

x = [1, 2, 3, 4, 5, 6]
y = [0, 1, 4, 9, 16, 25]
plt.plot(x, y)
plt.xlim(0, 7)
plt.ylim(0, 30)
plt.xlabel('x-values')
plt.ylabel('y-values')

plt.show() 