-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 22-Nov-2022 às 16:54
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `nome`, `descricao`, `des_simplificada`, `maximo`, `minimo`, `status`, `professor_id`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'Python', 'Na Formação Python e orientação a objetos, você vai aprender a versão 3 dessa linguagem na prática, aplicando orientação a objetos em seu código e boas práticas de programação. Você também vai entender como tratamos erros e conhecer diversas funcionalidades para tratar os diferentes tipos de coleções. Veremos também como ler e escrever diferentes formatos de arquivos usando Python. Ao final, você terá uma base sólida sobre a linguagem além de ter praticado com projetos, formando o conhecimento necessário para mergulhar cada vez mais na área Python para projetos web com Django e Flask.', 'Aprenda Python e orientação a objetos para ter uma base sólida sobre essa linguagem, sendo capaz de mergulhar em projetos web com Django e Flask.', 15, 5, 1, NULL, 'rosa.jpg', '2022-11-22 16:21:47', '2022-11-22 16:21:47'),
(2, 'JavaScript', 'JavaScript é a principal linguagem de programação utilizada na construção do front-end de uma aplicação Web, dando vida ao HTML e CSS. Aparece por trás das tecnologias como ReactJS, Next JS, VueJS, Angular e NodeJS. Nessa matéria você aprenderá com profundidade a linguagem, seu modelo de prototipação, o async, promises e boas práticas.', 'Aprenda JavaScript na prática, boas práticas e seu modelo de prototipação.', 28, 18, 1, NULL, 'azul.jpg', '2022-11-22 16:36:03', '2022-11-22 16:36:03'),
(3, 'Linguagem C', 'A linguagem de programação C é de extrema importância para a computação. Ela não somente é responsável pela criação de excelentes projetos como o Unix, Linux, Git e muitos outros, mas também serviu de base para uma grande quantidade de linguagens de programação. Você irá aprendar vetores, matrizes, structs e muito mais.', 'Venha aprender sobre vetores, matrizes, structs e recursividade em uma das linguagens mais importante que a tecnologia utiliza!', 30, 15, 1, NULL, 'laranja.jpg', '2022-11-22 16:38:06', '2022-11-22 16:38:06'),
(4, 'Banco de dados', 'Este curso levará você do zero até os níveis mais avançados em bancos de dados relacionais e não relacionais com uma visão do lado do desenvolvedor, que fará você ser altamente capacitado a não somente utilizar diferentes ferramentas, mas também a realizar modelagem de dados.  Aprenda sobre instalação e configuração de diferentes softwares de bancos de dados relacionais e não relacionais, detalhes da sintaxe SQL e muito mais.', 'O Curso de Banco de Dados ensina do básico ao avançado apresenta uma base sólida e extremamente completa sobre bancos de dados de maneira informativa, prática e envolvente.', 25, 10, 1, NULL, 'verde.jpg', '2022-11-22 16:41:42', '2022-11-22 16:41:42'),
(5, 'Sistemas de Redes', 'Aprenda tudo aquilo necessário para se tornar um analista de redes, analista de suporte, administrador de redes e muitas outras profissões que estão em alta no mercado. Você irá aprender sobre as topologias de redes, switches, roteadores, fibras ópticas, ethernet, Wi-Fi, cabeamento estruturado e muito mais. Nosso ensino é baseado na pirâmide: teoria + prática + exercícios de fixação para que você aprenda tudo sobre redes.', 'Você irá adquirir uma visão geral como funcionam as redes de telecomunicações e entender as principais tecnologias de redes de dados que existem atualmente.', 20, 7, 1, NULL, 'laranja.jpg', '2022-11-22 16:46:15', '2022-11-22 16:46:15'),
(6, 'Flutter', 'Flutter é uma tendência muito forte e é usado para grandes apps do Google como seu aplicativo Adwords, agora está marcado como \"pronto para produção\", por isso agora é a hora de entrar de cabeça e aprender! Este curso vai ensinar Flutter & Dart do zero, você certamente não precisa de nenhuma experiência de desenvolvimento com Android ou iOS, já que a ideia por trás do Flutter é aprender apenas uma linguagem. Aprenda na prática como funciona nstruções detalhadas de configuração tanto para MacOS como para Windows, visão geral dos widgets incorporados e como você pode adicionar os seus próprios widgets e muito mais.', 'Nesse curso você vai aprender as noções básicas e fundamentos do Google Flutter e também da linguagem Dart para que dessa forma você possa aprender essa tecnologia mesmo sem ter conhecimentos avançados de programação.', 12, 7, 1, NULL, 'verde.jpg', '2022-11-22 16:48:03', '2022-11-22 16:48:03'),
(7, 'Data Science', 'Data Science (Ciência de Dados) é atualmente um dos campos de trabalho mais relevantes da Inteligência Artificial, sendo responsável pela utilização de algoritmos inteligentes que tem a função de fazer com que os computadores aprendam por meio de bases de dados. Aprenda sobre pré-processamento dos dados, naïve bayes, árvores de decisão, random forest, regras, regressão logística, máquinas de vetores de suporte (SVM), redes neurais artificiais, avaliação de algoritmos e combinação e rejeição de classificadores.', 'Saiba como criar gráficos dinâmicos para visualização de bases de dados, prever se uma pessoa pagará um empréstimo baseado no histórico financeiro e muito mais.', 30, 8, 1, NULL, 'rosa.jpg', '2022-11-22 16:49:42', '2022-11-22 16:49:42'),
(8, 'Power BI', 'O curso ensina desde conceitos básicos até avançados, passando pelos principais pontos da ferramenta e dando toda a base que alguém precisa saber para executar suas próprias análises e construir dashboards profissionais. Ao final do curso é proposto um projeto final para colocar em prática tudo que foi ensinado e fixar seus conhecimentos.', 'Nesse curso vamos começar do zero, desde a instalação do Power BI no seu computador e te levar passo a passo ao nível avançado, ensinando todas as ferramentas que você precisa.', 20, 5, 1, NULL, 'azul.jpg', '2022-11-22 16:51:24', '2022-11-22 16:51:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
