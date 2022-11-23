-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 22-Nov-2022 às 23:51
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
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`id`, `nome`, `CPF`, `CEP`, `endereco`, `complemento`, `bairro`, `cidade`, `avatar`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Carlos Barbosa', 28709903321, 13057131, 'Rua Sarah Kubitschek de Oliveira', 'Bloco 8', 'Loteamento Residencial Porto Seguro', 'Campinas', 'default.jpg', '2022-11-22 21:41:28', '2022-11-22 21:41:28', 2),
(2, 'Jorge Oliveira', 27645268069, 13010111, 'Rua General Osório', 'Anexo 7', 'Centro', 'Campinas', 'default.jpg', '2022-11-22 21:43:19', '2022-11-22 21:43:19', 3),
(3, 'Felipe Cardoso', 11298977452, 13040148, 'Rua Venezuela', 'Casa 6', 'Jardim Nova Europa', 'Campinas', 'default.jpg', '2022-11-22 21:45:28', '2022-11-22 21:45:28', 4),
(4, 'Matheus Moreira', 25512680790, 13070036, 'Rua Cônego Manoel Garcia', 'Apartamento 112', 'Jardim Chapadão', 'Campinas', 'default.jpg', '2022-11-22 22:20:44', '2022-11-22 22:20:44', 5),
(5, 'Leticia Ramos', 54188877502, 13082630, 'Rua Ângelo Arroyo', 'Conjunto 9', 'Loteamento Vila Esperança', 'Campinas', 'default.jpg', '2022-11-22 22:23:48', '2022-11-22 22:23:48', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
