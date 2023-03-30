

#latas
cobertura_tinta = 108
capacidade_lata = 18
preco_lata = 80

#galões
cobertura_galao = 21.6
capacidade_galao = 3.6
preco_galao = 25

tamanho_area = float(input("Digite o tamanho da área a ser: "))
litros = (capacidade_lata*tamanho_area)/cobertura_tinta
latas_inteiras = int(litros/capacidade_lata)
if(litros%capacidade_lata != 0):
	latas_inteiras +=1

valor_total = latas_inteiras*preco_lata

print("Qtd litros: ",litros)
print("Qtd latas inteiras: ",latas_inteiras)
print("Valor total compra: R$", valor_total)


