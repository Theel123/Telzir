Documentação - Telzir (Tech)
Nessa documentação será descrito o funcionamento do sistema de consultas Telzir Telecom. Esse sistema calcula de maneira automática os preços das chamadas interestaduais se limitando a alguns estados no momento. Onde basta preencher este formulário e a tabela será atualizada com os valores calculados.
	Esta documentação abordará de forma conceitual e prática o modo pelo qual o sistema de consultas Telzir foi desenvolvido - desde o frontEnd até a parte de DevOps que foi utilizada (porém, nesta não serão apresentadas exemplos de código). Todo o código foi construído utilizando alguns conceitos de orientação a objetos, seguindo alguns princípios de SOLID, e respeitando patterns tais como MVC e singleton para economizar memória em algumas chamadas.


{imagem do formulário}

Arquitetura de Software: 
MVC:
Model (Modelo): camada que controla as classes e métodos utilizados, além controlar o banco de dados.

Controller (Controle): camada que controla em si as interações com os dados, e conecta os mesmos ao Model.

View (Visão): camada que retorna os dados para o usuário. 

FrontEnd:
	Para construir as interfaces utilizou-se o framework Bootstrap 4, voltado a layouts, e algumas funcionalidades tais como campo de login implementado na navbar foram construídas com jquery/bootstrap.

BackEnd: 
	Para codificar as funcionalidades ao lado do servidor, utilizou-se PHP 7.2.

Banco de Dados: 
Para armazenar os dados, um banco MySql Server foi empregado, com o SGBD  MYSQL WorchBench que armazena os dados de forma relacional.

Hospedagem: 
	Para Hospedar o sistema utilizou-se a plataforma de hospedagem na nuvem Heroku, com sub-domínio que é oferecido de forma gratuita. 


DevOps: 
Versionamento:
Para versionar nossa base de código utilizou-se a tecnologia Git.

Deployment: 
Para automatizar o deploy utilizou-se a própria Heroku, que oferece um CLI, integrado a um repositório de própria escolha como pivô para subir o estado atual da branch direto pra produção;

Testes: 
Para os testes de código utilizou-se o PHP-UNIT, que oferece um desenvolvimento prático e rápido para o comportamento do código, assim facilitando um desenvolvimento do sistema mais coeso.



ENGLISH



Documentation - Telzir (Tech)
In this documentation file, the query system Telzir Telecom will be described. The system calculates, automatically, the prices of the inter-state calling (limited to some states at the moment). Upon simply filling a form, the relevant table is then updated and the goal values are calculated.
	This documentation will cover the conceptual choices made to implement the Telzir query system - from the Front End to Dev Ops (although code for the later will not be shown). All the code was implemented with Object-Oriented Design in mind, following the SOLID principles and following patterns like MVC and singleton to save memory in some calls.

Software architecture:
MVC:
Model: control layer that controls all classes and methods, besides also controlling the database.

Controller: layer that controls the interactions with the data, in particular witht the Model.

View: layer that returns the data to the users. 

FrontEnd:
	In order to build the interfaces, the Bootstrap 4 framework (oriented to layouts) was employed. Some functionality, like the login field implemented in the navbar, was built using jquery/bootstrap.

BackEnd: 
	In order to code functionality in the server side, PHP 7.2 was used.

Database: 
In order to host the data, a MySql DB Server was employed, with the SGBD  MYSQL WorchBench for relational storage and queries.

Hosting 
	In order to host the system, the Heroku platform was employed, with its subdomain. 

DevOps: 
Versioning:
Git was used to version control.

Deployment: 
In order to automatize the deployment, the very Heroku was used, due to its CLI integrated to a custom repository, which allows to upload the current branch directly to production stage.

Tests: 
For the unit testing, PHP UNIT was used - which offers practical and quick iteration over code changes, thus making it easier to develop a choerent system..




