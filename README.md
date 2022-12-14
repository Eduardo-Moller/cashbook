# 📚 CASHBOOK DASHBOARD

# CodeIgniter 4 Application Starter

## O que é CodeIgniter?

O CodeIgniter é um Frameword PHP completo, leve, rápida, flexível e seguro. 
Mais informações podem ser encontradas no [site oficial](http://codeigniter.com).

## Testando a Aplicação

Baixe o projeto ou clone em um diretório de sua preferência.

Após o termiar de baixar, execute o comando `composer update` no diretorio criado para atualizar os repositorios do projeto.

Você pode utilizar o servidor de testes do próprio CodeIgniter utilizando o comando `php spark serve`, mas se preferir, pode ser usado algum servidor Web, como o Apache, IIS etc. 


**Lembrando que o host deve ser apostado para o diretório '/public' da aplicação**

Mais detalhes na [documentação oficial](https://codeigniter4.github.io/userguide/).


## 📋 Setup

Copie o arquivo `env` para `.env` e personalizar seu aplicativo, especificamente a baseURL
e quaisquer configurações do banco de dados.

## Mudança importante no index.php

O `index.php` não está mais na raiz do projeto! Foi movido para dentro da pasta * public *,
para melhor segurança e separação de componentes.

Isso significa que você deve configurar seu servidor da Web para "apontar" para a pasta * public * do seu projeto e
não para a raiz do projeto. Uma prática melhor seria configurar um host virtual para apontar para lá. Uma prática ruim seria apontar o servidor da Web para a raiz do projeto e esperar inserir * public /...*, como o restante de sua lógica e
estrutura são expostos.

## 📍 Conta para testes
E-mail: email@mail.com.br<br>
Senha: info1234<br>


