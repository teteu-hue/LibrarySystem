# _SOFTWARE DE GESTÃO PARA BIBLIOTECAS_

## _Aplicação para gestão do Empréstimo de Livros_
Dado a grande dificuldade para o empréstimo e consulta de livros disponíveis numa biblioteca pública

#
Estamos desenvolvendo uma aplicação para o controle dessa gestão de empréstimos de livros numa biblioteca pública, também é necessário controlar a disponibilidade dos livros disponíveis nessa biblioteca.

## _FLUXO DO NEGÓCIO PARA EMPRÉSTIMO_
Um cliente se interessa pelo livro e o pega da prateleira de livros ao levar até o **Funcionário** o mesmo primeiro verifica se o **Cliente** está cadastrado no sistema. 

Caso o **Cliente** esteja cadastrado o **Funcionário** pega o livro e cria um **Registro** desse empréstimo, colocando **Nome do Cliente, Idade, data do empréstimo, prazo para devolução e o número da carteira de identificação**.

Caso o **Cliente** não tenha uma **carteira de identificação** não é possível retirar o livro, precisando ser cadastrado no sistema, sendo necessário um documento de identificação única ***RG OU CPF***

## _FLUXO DO NEGÓCIO PARA DEVOLUÇÃO_
Ao devolver um livro o cliente informa o **número de identificação do livro emprestado** e o funcionário verificará qual é o prazo de devolução estipulado no momento do empréstimo, estando dentro do prazo o cliente é liberado para pegar outro livro, estando fora do prazo o cliente fica bloqueado durante 2 dias de fazer empréstimos na biblioteca. Estando sujeito a ficar até 2 semanas caso o prazo seja maior que 1 mês.

Na devolução é necessário colocar o dia que o livro foi devolvido e atualizado o seu **status** para disponível novamente.
