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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Secretaria', 'secretaria@gmail.com', NULL, '$2y$10$MPWDH1tKdGxztIWcRipGOecLkdUdlmdsSM3EehSQGQZvWUIcNsyP6', NULL, '2022-11-22 21:36:53', '2022-11-22 21:36:53'),
(2, 'Carlos', 'carlos.b@gmail.com', NULL, '$2y$10$jO/7sSkCrifmNoq3MepNXecDeFjobnZ6Gqznq9V3.7SrW3IpG78iK', NULL, '2022-11-22 21:39:49', '2022-11-22 21:39:49'),
(3, 'Jorge', 'jorge.o@gmail.com', NULL, '$2y$10$ig1QOglooRsoWWe17NMuBedNPvETCEwlX6G72s0pqfQ6uwUiq7RIe', NULL, '2022-11-22 21:42:24', '2022-11-22 21:42:24'),
(4, 'Felipe', 'felipe.c@gmail.com', NULL, '$2y$10$xBJRNzn6WKICoeQ0oPj8LeR6wOhRzYLfwZNdXb2/Q0LBnPP2tmlBK', NULL, '2022-11-22 21:44:38', '2022-11-22 21:44:38'),
(5, 'Matheus', 'matheus.m@gmail.com', NULL, '$2y$10$BmQI5ijUsAJDPKhytsdIYevc6k62qSuQ4AdjhoPnNB3SnrXp.Ec2a', NULL, '2022-11-22 22:19:45', '2022-11-22 22:19:45'),
(6, 'Leticia', 'leticia.r@gmail.com', NULL, '$2y$10$MSE6xsZSBfrQSSs4H4uM2.OoSMF2V.vaGrYo/WY2reE0FJYMOP2su', NULL, '2022-11-22 22:22:43', '2022-11-22 22:22:43'),
(7, 'Isadora', 'isadora.v@gmail.com', NULL, '$2y$10$qaatiu5OwNzC0JwojyftXulOdPx5j0lHhEv/5dbhS4C83o0A3eS7G', NULL, '2022-11-22 22:25:17', '2022-11-22 22:25:17'),
(8, 'Vitoria', 'vitoria.s@gmail.com', NULL, '$2y$10$gqrs3GEKL0MbEGfb4SPk2eKob31wvC2tUNEwd4K3cOZnpuJW9Jp6K', NULL, '2022-11-22 22:27:59', '2022-11-22 22:27:59'),
(9, 'Flavia', 'flavia.c@gmail.com', NULL, '$2y$10$aKMQWci9KQCplUFIfGsraeX1L.4VH1cb96w/r1h.0Aqc55fDMzZEK', NULL, '2022-11-22 22:30:16', '2022-11-22 22:30:16'),
(10, 'Miguel', 'miguel.andrade@gmail.com', NULL, '$2y$10$wltHeiNDiBhu2IUhUmHzbefbCH6gPiflm6Su7VjZZzzZPkTQBwzD.', NULL, '2022-11-22 22:31:57', '2022-11-22 22:31:57'),
(11, 'Enzo', 'enzolinho91432@gmail.com', NULL, '$2y$10$7X6W6Fr8YODxHChGIMkO/.ZhQSgWfLuaMUSGlK4e355DRdMbgSDma', NULL, '2022-11-22 22:33:52', '2022-11-22 22:33:52'),
(12, 'Guilherme', 'guilherme@gmail.com', NULL, '$2y$10$Key0shtRWQXKonSwX2hYQ.5i7SaJiBUapQRFPnjLX2H.uqwfMxFIW', NULL, '2022-11-22 22:35:29', '2022-11-22 22:35:29'),
(13, 'Joana', 'joanaalves@gmail.com', NULL, '$2y$10$PyjsX9VdJKZRuQib.Wh1QOl3WMiHBCxG9PznerjkkE1YuPxgBgFhi', NULL, '2022-11-22 22:37:21', '2022-11-22 22:37:21'),
(14, 'Danilo', 'danilo.braganca@gmail.com', NULL, '$2y$10$vC8YmRBlMMPxxkd1hFBKgOC2Slrl37vw9q3rBOTCTcu8a9gpUy.Wi', NULL, '2022-11-22 22:39:34', '2022-11-22 22:39:34'),
(15, 'Leonardo', 'leofernandes@gmail.com', NULL, '$2y$10$oE.6Mx3ascTcwsJonwQRc.0QVVTlu/aGBa1fBgHNMMqW7KVAjVpm2', NULL, '2022-11-22 22:41:21', '2022-11-22 22:41:21'),
(16, 'Francisco', 'francisco.castro@gmail.com', NULL, '$2y$10$/RwU2hnuJmZuqLhzk9hy7.AJdbchGgkRO/1Z3ClCNG3iVVr0F6zHq', NULL, '2022-11-22 22:42:55', '2022-11-22 22:42:55'),
(17, 'Ana Clara', 'anasclara@gmail.com', NULL, '$2y$10$66upVd2Rck.35FB3Zr6GzukYqaM7Tz9GF3ouk4hbiyrf/PJ2wpEk6', NULL, '2022-11-22 22:45:29', '2022-11-22 22:45:29'),
(18, 'Beatriz', 'bianewman@gmail.com', NULL, '$2y$10$rGyaOzU2akufMiOlatIhWuWA9wLgbb7W0DywuvYNLGCgOH4573lYW', NULL, '2022-11-22 22:47:23', '2022-11-22 22:47:23'),
(19, 'Ângelo', 'angelo@gmail.com', NULL, '$2y$10$mhEI7p54GoXNf7XwtImYq.Dhu8tCXaHKowhV7TlzxQDdcF8GnUEgK', NULL, '2022-11-22 22:49:04', '2022-11-22 22:49:04'),
(20, 'Maria', 'mariaeduarda@gmail.com', NULL, '$2y$10$01hn3vbZfWvQn2rgOGBi7uI5lAVvJwFKnd7sbdqB0SBNrhxEUE7fS', NULL, '2022-11-22 22:51:03', '2022-11-22 22:51:03'),
(21, 'Gabriel', 'gabriel@gmail.com', NULL, '$2y$10$UdtL3cH0yrpUQOK53aboPe/hMM5JE.SK0Qte4xRozLuiRv3Peju9u', NULL, '2022-11-22 22:52:55', '2022-11-22 22:52:55'),
(22, 'Oswald', 'oswalddeandrade@gmail.com', NULL, '$2y$10$RN0M7tprBh4v/DaYjT8TN.fSSJebqBiM6WdMpLtGAKnnvjRO4eqba', NULL, '2022-11-22 22:54:44', '2022-11-22 22:54:44'),
(23, 'Jair', 'jairbarbosa@gmail.com', NULL, '$2y$10$7RCtTYPVJPPdOlrPW15CP.wuZ2Jtavp8kuewrdmK47Z2i3WPTLefS', NULL, '2022-11-22 22:56:26', '2022-11-22 22:56:26'),
(24, 'Daniela', 'daniela@gmail.com', NULL, '$2y$10$Fq6XtP/KTGrKV26HayYKoeNR/nV4demG2fA2vw1bHTZg4vmvbNXR.', NULL, '2022-11-22 22:58:24', '2022-11-22 22:58:24'),
(25, 'Giovana', 'giovana@gmail.com', NULL, '$2y$10$KFR/AV.JDTcFXT4TsCXpveIjE0fXFY6CfxoqbQ56djnOPLUP40NMa', NULL, '2022-11-22 23:00:45', '2022-11-22 23:00:45'),
(26, 'Luana', 'luana@gmail.com', NULL, '$2y$10$EtVyV85Y5LHEbxJzzkekrOY1V0Xf4wBNo6GIRoPg.fJmpgQ7XCRli', NULL, '2022-11-22 23:02:23', '2022-11-22 23:02:23'),
(27, 'Célia', 'celia@gmail.com', NULL, '$2y$10$NYSYGQUFXeu4Nb1f0ZSiOOo.bmt66DGtiyiV75uztXAY1z8hbIWRm', NULL, '2022-11-22 23:04:18', '2022-11-22 23:04:18'),
(28, 'Antonella', 'antonella.a@gmail.com', NULL, '$2y$10$LLvIAMngq5/nuCVX7Gtia.I1dfPcqVWFwUxT0xnYDfWG8MjCDfBkS', NULL, '2022-11-22 23:06:22', '2022-11-22 23:06:22'),
(29, 'Sabrina', 'sabrina.b@gmail.com', NULL, '$2y$10$yJp1Nx9CAzpg3CaRPvW/b.FX2GpC.dmWF8FaR1FXwBYh0w3M5DZDG', NULL, '2022-11-22 23:08:17', '2022-11-22 23:08:17'),
(30, 'Aldemiro', 'aldemiro.f@gmail.com', NULL, '$2y$10$lr20defBu24dM1AFVaYM3.Tc8PXBkQQ0QG.41VbKoR24JYXBN71u.', NULL, '2022-11-22 23:10:20', '2022-11-22 23:10:20'),
(31, 'Joaquim', 'joaquim.b@gmail.com', NULL, '$2y$10$d12zzmQJnUEGq.gRg4He3uvAnomEWzL9fIc1U.sC7pB4tKDBtsKg6', NULL, '2022-11-22 23:12:26', '2022-11-22 23:12:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
