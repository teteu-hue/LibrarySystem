<?php    
// Criando as tabelas
$generoQuery = "CREATE TABLE IF NOT EXISTS Genero (
    id_genero INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome_genero VARCHAR(50) NOT NULL
);";

$livroQuery = "CREATE TABLE IF NOT EXISTS Livro (
    id_livro INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome_livro VARCHAR(100) NOT NULL,
    id_genero INT NOT NULL REFERENCES Genero(id_genero),
    preco DECIMAL(10,2) NOT NULL,
    numeroDePaginas INT NOT NULL,
    descricao TEXT
);";

$pessoaQuery = "CREATE TABLE IF NOT EXISTS Pessoa(
    id_pessoa INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    rg INT (9) NOT NULL,
    nascimento DATE
);";

$contatoQuery = "CREATE TABLE IF NOT EXISTS contato(
    id_contato INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    email VARCHAR(40) NOT NULL,
    telefone INT(9) NOT NULL,
    id_pessoa_contato INT NOT NULL REFERENCES Pessoa(id)
);";
// id_pessoa_contato.  id_pessoa sera vinculado a outras tabelas
// e o mysql pode reclamar ao usar o mesmo nome em varias colunas, mesmo sendo de tabelas diferentes
// por isso como bo pratica  id_pessoa(referindo a qual tabela esta vinculada)_contato(referindo a tebela em si)

$emprestimoQuery = "CREATE TABLE IF NOT EXISTS Emprestimo(
    id_emprestimo INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_pessoa_emprestimo INT NOT NULL REFERENCES Pessoa(id),
    id_livro_emprestimo  INT NOT NULL REFERENCES Livro(id),
    dia DATETIME NOT NULL ,
    prazo DATE NOT NULL 
);";

$devolucaoQuery = "CREATE TABLE IF NOT EXISTS Devolucao(
    id_devolucao INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_pessoa_devolucao INT NOT NULL REFERENCES Pessoa(id),
    id_livro_devolucao  INT NOT NULL REFERENCES Livro(id),
    devolucao DATETIME NOT NULL 
);";

// Inserindo dados nas tabelas
$sql_insert_genero = "INSERT INTO Genero (nome_genero) VALUES 
    ('Ficção Científica'),
    ('Fantasia'),
    ('Romance'),
    ('Suspense'),
    ('Não Ficção')";

$sql_insert_livro = "INSERT INTO Livro (nome_livro, id_genero, preco, numeroDePaginas, descricao) VALUES 
    ('O Guia do Mochileiro das Galáxias', 1, 29.90, 256, 'Aventuras pelo espaço com muita comédia'),
    ('O Senhor dos Anéis', 2, 59.90, 1008, 'Uma jornada épica na Terra Média'),
    ('Orgulho e Preconceito', 3, 19.99, 368, 'Um clássico romance de Jane Austen'),
    ('O Código Da Vinci', 4, 39.50, 480, 'Um suspense cheio de mistérios e reviravoltas'),
    ('Uma Breve História do Tempo', 5, 34.50, 256, 'Explorações no campo da física teórica por Stephen Hawking'),
    ('1987', 3, 34.50, 256, 'Mil novecentos e oitenta e quatro (também publicado como 1984) é um romance distópico do escritor inglês George Orwell. Foi publicado em 8 de junho de 1949 pela Secker & Warburg como o nono e último livro de Orwell concluído em vida. Tematicamente, centra-se nas consequências do totalitarismo, da vigilância em massa e da lavagem cerebral na sociedade')";
