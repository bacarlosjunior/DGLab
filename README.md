# DGLab
Sistema web desenvolvido para fim de avaliação no processo seletivo de estágio DGLab de acordo com a atividade proposta.
1) Objetivo:

Desenvolver uma tela de login, senha e cadastro para a plataforma onde serão disponibilizados os laudos dos usuários (resultados do exame).
Desenvolver a tela após o acesso. Devendo conter: 
ID, Nome do Paciente, E-mail, Botão para acessar o PDF com o resultado do exame. O PDF gerado deverá conter as informações de Nome, ID e E-mail do usuário.


2) Descrição das funcionalidades:
	
	a) Tela de login contém os campos de e-mail e senha com o botão “entrar”, o botão de “Cadastrar” e a logo clicável que redireciona para a página inicial, contida no arquivo: index.php.
	
	b) Tela de cadastro possui os campos: CPF (permitido apenas números), Nome (pelo menos dois nomes),E-mail (com formato de texto@…), Senha (no mínimo 8 caracteres), Endereço, CEP (somente números), Cidade e Estado, contido no arquivo: cadastro.php.
	
	c) Tela de usuário exibe os dados do cadastro e possui os botões “gerar pdf” e “sair”, contido no arquivo: detalhe.php.
	
	d) PDF gerado exibe os dados do usuário e é possível realizar seu download, contido no arquivo: pdf.php.
	
	e) Logo clicável em todas as telas.
	

3) Tecnologias utilizadas:

A atividade foi desenvolvida utilizando as linguagens PHP, HTML e CSS e a ferramenta DomPDF para a geração do arquivo de PDF.
Os dados são armazenados em um banco de dados através do MySql, contendo uma tabela usuário com os campos correspondentes ao cadastro e um numero ID autoincrementavel gerado automaticamente.

4) Hospedagem:

Para a hospedagem do sistema foi utilizado o servidor gratuito InfinityFree com banco de dados proprio também usando MySql e com a mesma estrutura.

O link para acesso do sistema é : http://cbajdglab.epizy.com/


