<?php

$genderBooks = [
    new GenderBook("Romance"),
    new GenderBook("Drama"),
    new GenderBook("Terror"),
    new GenderBook("Fantasia")
];

$books = [
    new Book("1984", $genderBooks[0], 20.0, 500, "Mil novecentos e oitenta e quatro (também publicado como 1984) é um romance distópico do escritor inglês George Orwell. Foi publicado em 8 de junho de 1949 pela Secker & Warburg como o nono e último livro de Orwell concluído em vida. Tematicamente, centra-se nas consequências do totalitarismo, da vigilância em massa e da lavagem cerebral na sociedade"),
    new Book("O diário de Anne Frank", $genderBooks[1], 25.0, 328, "O Diário de Anne Frank foi composto pela então adolescente Anne Frank, no período que se estende de 1942 a 1º de agosto de 1944. Este poderia ser um diário escrito por qualquer garota de 13 anos, nos tempos atuais, com todas as inquietudes e preocupações de uma jovem, se ela não estivesse vivendo justamente em um dos contextos mais difíceis da história da Humanidade, a Segunda Guerra Mundial."),
    new Book("Vamos falar de amor", $genderBooks[0], 26, 877, "Vamos falar de amor traz abordagem ampla sobre o sentimento e promete mudar para sempre a forma como pensamos sobre nossas relações"),
    new Book("A culpa é das estrelas", $genderBooks[0], 28, 65, "Hazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante ― o que lhe dá a promessa de viver mais alguns anos ―, o último capítulo de sua história foi escrito no momento do diagnóstico."),
    new Book("Querido John", $genderBooks[0], 29, 300, "Após uma juventude de rebeldia e bebedeira, John Tyree decidiu dar início a um novo capítulo em sua vida e se alistou no Exército. Um ano depois, agora um novo homem, ele retorna a -Wilmington, na Carolina do Norte, para passar um tempo com o velho pai.

    Uma tarde, enquanto admira o pôr do sol da pequena cidade litorânea, ele conhece a garota de seus sonhos. Além de ser linda, Savannah é amigável, de sorriso fácil, um exemplo de boa conduta e altruísmo. Curiosamente, esse contraste de personalidades não impede que um sentimento arrebatador nasça entre os dois."),
    new Book("It Coisa", $genderBooks[2], 25, 400, "Nesse clássico que inspirou os filmes da Warner, um grupo de amigos conhecido como Clube dos Otários aprende o real sentido da amizade, do amor, da confiança... e do medo. O mais profundo e tenebroso medo."),
    new Book("Alice no País das Maravilhas", $genderBooks[3], 35, 650,"Uma menina, um coelho e uma história capazes de fazer qualquer um de nós voltar a sonhar. Alice é despertada de um leve sono ao pé de uma árvore por um coelho peculiar. Uma criatura alva e falante com roupas engraçadas, que consulta seu relógio e reclama do próprio atraso. Curiosa como toda criança, Alice segue o animal até cair em um buraco sem fim que mudou para sempre a literatura infantil. Mais de 150 anos depois, Alice no País das Maravilhas continua repleto de ensinamentos para aqueles que ousaram seguir o Coelho Branco até sua toca."),
];

?>