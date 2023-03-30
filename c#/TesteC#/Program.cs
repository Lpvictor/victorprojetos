// using System;
// namespace VictorApp{
// class Program{
// static void Main(string[] args)
// {    
//     Console.WriteLine("Digite a sua 1° nota: ");
//     int n1 = Convert.ToInt32(Console.ReadLine());
//     Console.WriteLine("Digite a sua 2° nota: ");
//     int n2 = Convert.ToInt32(Console.ReadLine());
//     Console.WriteLine("Digite a sua 3° nota: ");
//     int n3 = Convert.ToInt32(Console.ReadLine());
//     Console.WriteLine("Digite a sua 4° nota: ");
//     int n4 = Convert.ToInt32(Console.ReadLine());
 
//    int soma = (n1 + n2 + n3 + n4);

//    int media = soma/4;

//    if(media > 6){
//     Console.WriteLine("Parabéns, aluno Aprovado!");
//    }else if(media < 6){
//     Console.WriteLine("Aluno reprovado!");
//    }


// Console.WriteLine("A soma de todos os valores é de: " + soma + "\nA média das notas é de: " + media);
// }


// }

// }










// using System;
// namespace VictorApp{
// class Program{
// static void Main(string[] args)
// {
//     Console.WriteLine("Coloque o valor inicial: ");
//     int n1 = Convert.ToInt32(Console.ReadLine());
//     Console.WriteLine("Digite o valor do número final: ");
//     int n2 = Convert.ToInt32(Console.ReadLine());
    
// while(n1 <= n2){
// if(n1 % 2 == 0){
//     Console.WriteLine(n1 + " é par");
// }else{
//     Console.WriteLine(n1 + " é ímpar");
// }
// n1+=1;

// }

// }
// }
// }







// using System;
// namespace VictorApp{
// class Program{
// static void Main(string[] args)

// {
    
//     string usuario = "Victor";
//     string senha = "12345";

// Console.WriteLine("Digite seu nome de usuário: ");
// string usu = Console.ReadLine();
// Console.WriteLine("Digite sua senha: ");
// string sen = Console.ReadLine();

// while(usu == usuario){
// if(senha == sen){
//    Console.WriteLine("Usuario(a) " + usu + " logado(a) com sucesso!");
//    break;

// }else{
//     Console.WriteLine("Nome de usuario ou senha errados, tente novamente!");
//     break;
// }
// }
// Console.WriteLine("Nome de usuário errado!");

// }
// }
// }





// using System;
// namespace VictorApp{
// class Program{
// static void Main(string[] args)
// {
// string[] nomes = new string[5]; // cria um array com 5 elementos do tipo inteiro

// // atribui valores aos elementos do array
// nomes[0] = "Victor";
// nomes[1] = "Raissa";
// nomes[2] = "Mateus";
// nomes[3] = "Vinicios";
// nomes[4] = "Jeferson";

// // imprime os valores do array
// for (int i = 0; i < nomes.Length; i++)
// {
//     Console.WriteLine("Elemento {0} = {1}", i, nomes[i]);
// }
// }
// }
// }













using System;
using System.Collections.Generic;

class Program
{
    static void Main()
    {
        // cria uma lista vazia de inteiros
        List<int> numeros = new List<int>();

        // adiciona elementos à lista
        numeros.Add(10);
        numeros.Add(20);
        numeros.Add(30);

        // imprime os elementos da lista
        foreach (int numero in numeros)
        {
            Console.WriteLine(numero);
        }
        Console.WriteLine("=========================================== \nRemover o 20: ");
        // remove um elemento da lista
        numeros.Remove(20);

        // imprime os elementos da lista novamente
        foreach (int numero in numeros)
        {
            Console.WriteLine(numero);
        }
        Console.WriteLine("========================================== \nVerificar se a lista contém um determinado elemento: ");
        // verifica se a lista contém um determinado elemento
        bool contemTrinta = numeros.Contains(30);
        Console.WriteLine("A lista contém o número 30? {0}", contemTrinta);
        
         Console.WriteLine("========================================== \nEncontrar o índice de um elemento na lista: ");
        // encontra o índice de um elemento na lista
        int indiceDeDez = numeros.IndexOf(10);
        Console.WriteLine("O índice do número 10 é: {0}", indiceDeDez);
 
        // limpa a lista
        numeros.Clear();
    }
}   