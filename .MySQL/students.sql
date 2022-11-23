-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 22-Nov-2022 às 23:53
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
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `nome`, `CPF`, `CEP`, `endereco`, `complemento`, `bairro`, `cidade`, `nota`, `filme`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Isadora Vieira', 27409537477, 13052778, 'Rua Três', 'Casa 285', 'Parque Industrial Lisboa', 'Campinas', NULL, NULL, '2022-11-22 22:26:31', '2022-11-22 22:26:31', 7),
(2, 'Vitoria Sousa', 12345678911, 1001000, 'Praça da Sé', 'Lado ímpar', 'Sé', 'São Paulo', NULL, NULL, '2022-11-22 22:28:57', '2022-11-22 22:28:57', 8),
(3, 'Flavia Cristina Medeiros', 54468566651, 18016632, 'Rua Francisca Paifer Hingst', 'Av. São Paulo', 'Rancho Dirce', 'Sorocaba', NULL, NULL, '2022-11-22 22:31:06', '2022-11-22 22:31:06', 9),
(4, 'Miguel Andrade', 47303506349, 13034450, 'Rua João Virgílio Baptista', 'Casa 8', 'Vila Iapi', 'Campinas', NULL, NULL, '2022-11-22 22:32:50', '2022-11-22 22:32:50', 10),
(5, 'Enzo Fabrício', 64512376451, 15026348, 'Rua Terra', 'Casa 51', 'Taquaral', 'Campinas', NULL, NULL, '2022-11-22 22:34:39', '2022-11-22 22:34:39', 11),
(6, 'Guilherme Figueiredo', 52263598206, 14023696, 'Rua Olavo Bilac', 'Apartamento 60', 'Villa Iti', 'Presidente Prudente', NULL, NULL, '2022-11-22 22:36:29', '2022-11-22 22:36:29', 12),
(7, 'Joana Alves', 52206589503, 10320569, 'Rua Castro Alves', NULL, 'Jardim Jacira', 'Itapecerica da Serra', NULL, NULL, '2022-11-22 22:38:31', '2022-11-22 22:38:31', 13),
(8, 'Danilo Braganca', 58896025608, 12016985, 'Rua Sizisnandes Dias Fernandes', 'Casa 10', 'Rio Claro', 'Petrolina', NULL, NULL, '2022-11-22 22:40:18', '2022-11-22 22:40:18', 14),
(9, 'Leonardo Fernandes', 59965520159, 12015629, 'Rua dos Frutos', 'Av. Santos Dumont', 'Jardim Botânico', 'Uberlândia', NULL, NULL, '2022-11-22 22:42:07', '2022-11-22 22:42:07', 15),
(10, 'Francisco Castro', 56602148504, 15026689, 'Quadra QNL 8 Conjunto A', NULL, 'Taguatinga Norte', 'Distrito Federal', NULL, NULL, '2022-11-22 22:44:33', '2022-11-22 22:44:33', 16),
(11, 'Ana Clara Medeiros', 54402698509, 18016633, 'Rua José Carlos dos Prazeres', 'Casa 70', 'União', 'Boa Vista', NULL, NULL, '2022-11-22 22:46:17', '2022-11-22 22:46:17', 17),
(12, 'Beatriz Newman', 58896520365, 140150269, 'Rua Andorinha', 'Av. Santa Isabel', 'Lagoa de Crapebus', 'Serra', NULL, NULL, '2022-11-22 22:48:19', '2022-11-22 22:48:19', 18),
(13, 'Ângelo Freitas', 56620156902, 15203658, 'Rua Maranhão', 'Casa 39', 'Jardim Santa Luzia', 'Rondonópolis', NULL, NULL, '2022-11-22 22:49:55', '2022-11-22 22:49:55', 19),
(14, 'Maria Eduarda Medeiros', 54489562006, 18016634, 'Rua Santarém', 'Apartamento 63', 'Infraero', 'Macapá', NULL, NULL, '2022-11-22 22:52:02', '2022-11-22 22:52:02', 20),
(15, 'Gabriel Dias', 56620356980, 16205245, 'Avenida Panamericana', 'Av. Barão de Itatui', 'Nova Caruaru', 'Caruaru', NULL, NULL, '2022-11-22 22:53:43', '2022-11-22 22:53:43', 21),
(16, 'Oswald de Andrade', 52265895203, 10263026, 'Alameda Picapau', 'Apartamento 35', 'Chácara Ipé', 'Rio Branco', NULL, NULL, '2022-11-22 22:55:41', '2022-11-22 22:55:41', 22),
(17, 'Jair Barbosa', 55425412503, 52150141, 'Rua Vila Flor', NULL, 'Dois Unidos', 'Recife', NULL, NULL, '2022-11-22 22:57:30', '2022-11-22 22:57:30', 23),
(18, 'Daniela Hayashi', 55126532602, 64048925, 'Rua Homero Castelo Branco 864', 'Apartamento 56', 'Jóquei', 'Teresina', NULL, NULL, '2022-11-22 22:59:23', '2022-11-22 22:59:23', 24),
(19, 'Giovana Alarcon', 59961252159, 1210000, 'Rua Vitoria', 'Av. Carlos Comitre', 'Santa Efigenia', 'São Paulo', NULL, NULL, '2022-11-22 23:01:37', '2022-11-22 23:01:37', 25),
(20, 'Luana Baptista', 52265410551, 64005780, 'Rua Agrimensor Boa Vista', 'Casa 76', 'Mafrense', 'Teresina', NULL, NULL, '2022-11-22 23:03:16', '2022-11-22 23:03:16', 26),
(21, 'Célia Maltempi', 54420356203, 49043833, 'Rua C', 'Apartamento 658', 'Santa Maria', 'Aracaju', NULL, NULL, '2022-11-22 23:05:20', '2022-11-22 23:05:20', 27),
(22, 'Antonella Albuquerque', 42157783792, 13051149, 'Praça Afife Feres', 'Casa 119', 'Jardim São José', 'Campinas', NULL, NULL, '2022-11-22 23:07:08', '2022-11-22 23:07:08', 28),
(23, 'Sabrina Brandão', 73596280168, 13053384, 'Rua Davi Alves de Barros', 'Apartamento 98', 'Jardim Cidade Universitária', 'Campinas', NULL, NULL, '2022-11-22 23:09:05', '2022-11-22 23:09:05', 29),
(24, 'Aldemiro Faria', 88483315645, 13067733, 'Rua Alan Barbosa', 'Conjunto 10', 'Rosália', 'Campinas', NULL, NULL, '2022-11-22 23:11:11', '2022-11-22 23:11:11', 30),
(25, 'Joaquim Borges', 68633082233, 13049384, 'Rua Filomena Santarelli Biondi', 'Casa 9', 'Swiss Park', 'Campinas', NULL, NULL, '2022-11-22 23:13:14', '2022-11-22 23:13:14', 31);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
