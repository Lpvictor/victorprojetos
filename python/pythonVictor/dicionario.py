emails = {
   "Iguatemi":"adm@iguatemi.com.br",
   "Parangaba":"gerente@shoppingparangaba.com.br",
   "Joquei":"administrador@joquei.com.br"
}
#busca = emails["Iguatemi"]
emails["Arvoredo"] = "adm@shoparvoredo.com"
#print(emails)
for x in emails.values():
   print(x)


   #.keys serve para aparecer apenas as chaves. Ex: print(emails.keys)
   #.values serve parar aparecer apenas os valores das chaves
   #clear serve para apagar temporariamente o dicionário