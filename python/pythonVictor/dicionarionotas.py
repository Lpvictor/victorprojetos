notas = {}
opcao = int(input("Digite o número de uma das opções: "
              "\nOpção 1 Cadastrar um novo aluno e nota"
              "\nOpção 2 Consultar aluno e notas"
              "\nOpção 3 Exibir média da turma"
              "\nOpção 4 Apagar Lista"
              "\nOpção 5 Gravar a lista em txt"))
if(opcao==1):
   q = int(input("Coloque a quantidade de alunos que deseja cadastras: "))
   lp = 0
while(lp < q):
    nome = input("Digite o nome do aluno: ")
    nota = float(input("Digite a nota de" + nome))
    notas[nome] = nota
    print(notas)
    lp +=1
if(opcao == 2):
    cons = input("Buscar aluno: ")

if(opcao == 3):
   soma = 0

