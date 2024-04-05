<?php

$hostname = "localhost";
$username = "root";
$password = "root";
$database = "biblioteca";

$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_error){
    die("Connection failed: ". mysqli_connect_error());
}
    
echo "Connected Sucessfully!<br>";

// Criando as tabelas
$generoQuery = "CREATE TABLE IF NOT EXISTS Genero (
    id_genero INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome_genero VARCHAR(50) NOT NULL
);";

$livroQuery = "CREATE TABLE IF NOT EXISTS Livro (
    id_livro INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome_livro VARCHAR(100) NOT NULL,
    id_genero INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    numeroDePaginas INT NOT NULL,
    descricao TEXT,
    FOREIGN KEY (id_genero) REFERENCES genero(id_genero)
);";

// Rodando a query no banco de dados
if($mysqli->query($generoQuery) === TRUE){
    echo "Tabela criada com sucesso. <br>";
} else {
    echo "Erro ao criar tabela: " . $mysqli->error;
}

if($mysqli->query($livroQuery) === TRUE){
    echo "Tabela criada com sucesso. <br>";
} else {
    echo "Erro ao criar tabela: " . $mysqli->error;
}

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
    ('Uma Breve História do Tempo', 5, 34.50, 256, 'Explorações no campo da física teórica por Stephen Hawking')";

if($mysqli->query($sql_insert_genero) === TRUE){
    echo "Dados inseridos com sucesso!<br>";
} else {
    echo "Erro ao inserir os dados no banco de dados! <br>" . $mysqli->error;
}

if($mysqli->query($sql_insert_livro) === TRUE){
    echo "Dados inseridos com sucesso. <br>";
} else {
    echo "Erro ao inserir dados no banco de dados: " . $mysqli->error;
}


$mysqli->close();
?>