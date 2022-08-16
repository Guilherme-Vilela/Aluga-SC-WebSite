# Web Site para locações de imoveis

O website auxilia desde a reserva do imóvel até o pagamento do mesmo, possibilitando ao locatário facilidades quanto ao pagamento e agendamento da residência. A escolha das ferramentas utilizadas para o desenvolvimento do protótipo aqui analisado, foram as linguagens HTML, CSS e JavaScript para desenvolvimento front-end, e para o back-end a linguagem PHP junto framework (Laravel), que é atualmente o framework mais utilizado por desenvolvedores web PHP e com uma comunidade ativa.

# Inicialização do projeto
1° Para inicializar o projeto é nescessario ter o composer e o PHP instalado em sua maquina;

2° Com os dois ja instalados vai ao diretorio principal da aplicação abra o terminal (CMD) e digite "composer update";

![image](https://user-images.githubusercontent.com/68655658/184996105-1d9d5b59-e82a-45ba-915c-f1eebde8d803.png)

3° O composer ira realizar todo o processo de atualização das bibliotecas e baixar as dependencias nescessarias;

4° Após esse processo precisamos criar um arquivo .env no diretorio principal tem o .env example ele pode ser utilizado como base;

![image](https://user-images.githubusercontent.com/68655658/184996337-b8908efe-a366-4150-a7f5-238ceca6b504.png)

A imagem acima mostra as configurações do ambiente laravel, caso queria utilizalo em um servidor ira ter que alterar o APP_URL

![image](https://user-images.githubusercontent.com/68655658/184996442-8e804faf-c76b-4a92-a89f-29298c8b0be5.png)

A imagem acima mostra as configurações do ambiente google para fazer login e os dados de conexão com o banco, aqui basta alterar e colocar os seus dados de conexão
obs: caso não tenha conta no google admin, apenas a funcionalidade de login via google ira deixar de funcionar

![image](https://user-images.githubusercontent.com/68655658/184996748-be3879f7-28fb-4746-8a7f-15cf7a812626.png)

A imagem acima mostra as configurações do ambiente laravel, não é nescessario alteração

![image](https://user-images.githubusercontent.com/68655658/184996930-d671f7da-f20f-4f77-8b60-0cbc702655a0.png)

A imagem acima demonstra as configurações do servidor SMTP (Serviço de envio de email), altero para as configurações do seu provedor

5° Após esse passos salve o arquivo .env 

7° Abra o terminal dentro da pasta principal do projeto e digite "php artisan migrate:fresh" esse comando criara todas as tabelas no seu banco de dados.

8° Abra o terminal dentro da pasta principal do projeto e digite "php artisan serve", com esse comando o projeto ja sera incializado  no seu local host na porta 8000.

![image](https://user-images.githubusercontent.com/68655658/184997289-bc5777b7-bd92-4248-8f5a-9721b3985bff.png)






