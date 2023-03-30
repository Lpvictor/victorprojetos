from typing import List

import matplotlib.pyplot as plt
import csv

x = []
y = []

with open('notas.csv', 'r') as csvfile:
    lines = csv.reader(csvfile, delimiter=';')
    for row in lines:
        x.append(row[0])
        y.append(float(row[1]))

plt.plot(x, y, color='g', linestyle='dashed',
         marker='o', label="Gráfico de Notas")

plt.xticks(rotation=25)
plt.xlabel('Nome dos alunos')
plt.ylabel('Notas dos alunos')
plt.title('Gráfico de notas', fontsize=20)
plt.grid()
plt.legend()
plt.show()