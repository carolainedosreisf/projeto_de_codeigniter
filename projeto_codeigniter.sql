-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Dez-2019 às 19:51
-- Versão do servidor: 5.7.26
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_codeigniter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_session`
--

DROP TABLE IF EXISTS `ci_session`;
CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('vpfqqf0e5gfq5nl0ok87kcgt3ntjqges', '::1', 1575552162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535313838383b757365726c6f6761646f7c4e3b6c6f6761646f7c623a303b),
('6gq7sud4n6p0mg12cgm3id61vm1psc5t', '::1', 1575552676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535323637363b757365726c6f6761646f7c4e3b6c6f6761646f7c623a303b),
('spb5pft4kodt833emleioorq9t1vv6n0', '::1', 1575552842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535323833373b),
('9pqqt925cmrsio6qheqm6mkflodmpi44', '::1', 1575553176, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535333136343b),
('h73b6g6j2erhokgcelglbfq6imucanef', '::1', 1575834459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353833343136353b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a32343a226361726f6c646f7372656973393740676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a393a224361726f6c61696e65223b733a383a2274656c65666f6e65223b733a303a22223b7d6c6f6761646f7c623a313b),
('erkmb9953a5jr8ig4imbt42v3vn4tg5i', '::1', 1575834651, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353833343436393b757365726c6f6761646f7c4e3b6c6f6761646f7c623a303b),
('ubkmhuqeps9gvh21p1et40rl4dq70qf2', '::1', 1575558406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535383338343b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a32343a226361726f6c646f7372656973393740676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a393a224361726f6c61696e65223b733a383a2274656c65666f6e65223b733a303a22223b7d6c6f6761646f7c623a313b),
('qu4rv0gu1u9v0ich58fogeakf0rjgec6', '::1', 1575833813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353833333831333b),
('dnhu91m84n2ljs3u2n0m0qivof0pte5p', '::1', 1575834052, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353833333831333b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a32343a226361726f6c646f7372656973393740676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a393a224361726f6c61696e65223b733a383a2274656c65666f6e65223b733a303a22223b7d6c6f6761646f7c623a313b),
('hlvuk8skvg3soag5bm136j1e7vqcv96u', '::1', 1575558008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535373732333b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('aes8ldg9j4pavlthaamg0f6r7q3k93o6', '::1', 1575558294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535383036323b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a32343a226361726f6c646f7372656973393740676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a393a224361726f6c61696e65223b733a383a2274656c65666f6e65223b733a303a22223b7d6c6f6761646f7c623a313b),
('skidnasorovuomlobejg672f4po77mh9', '::1', 1575556082, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535363031313b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('8idtp0q0c3k7hsa7qgne0aqhhgqtr9kj', '::1', 1575556603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535363332303b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('8q714qppqi6g4ledl0f1qujvs6k6tvtq', '::1', 1575557053, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535363736313b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('5evlm55v1ttje3nm1kanko8gpbtbf36k', '::1', 1575557692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535373431333b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('9onp994oseqho7gl6ljs3nfel954hfah', '::1', 1575557268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535373036393b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('il9hl1htcs7aglmfirlstdvqsuikqrg4', '::1', 1575555740, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535353636393b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('gj45bgpi4ssmfcnbevojsq0pses15074', '::1', 1575555246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535343934383b757365726c6f6761646f7c4e3b6c6f6761646f7c623a303b),
('u7iemfh37dvgq9k7c818aophvlnit58f', '::1', 1575555333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535353235313b757365726c6f6761646f7c4f3a383a22737464436c617373223a353a7b733a323a226964223b733a313a2232223b733a353a22656d61696c223b733a31353a226361726f6c40676d61696c2e636f6d223b733a353a2273656e6861223b733a33323a223831646339626462353264303464633230303336646264383331336564303535223b733a343a226e6f6d65223b733a32383a224361726f6c61696e6520646f732052656973204672616e636973636f223b733a383a2274656c65666f6e65223b733a31313a223438393936373235343538223b7d6c6f6761646f7c623a313b),
('mine3js686ph63n03sstn5577m738064', '::1', 1575554755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535343530333b),
('531ebu3r0v8bu9oagudivmsk6rsk9ffm', '::1', 1575553882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537353535333734313b);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `qtd` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`qtd`, `id`) VALUES
(5, 0),
(10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` longtext NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_user`, `nome`, `descricao`, `img`) VALUES
(4, 1, 'produto 1', '#1 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '1'),
(6, 1, 'produto 2', '#2 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '1'),
(8, 1, 'produto 3', '#3 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '1'),
(10, 1, 'produto 4', '#4 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(11, 1, 'produto 5', '#5 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(12, 1, 'produto 6', '#6 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(13, 1, 'produto 7', '#7 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(14, 1, 'produto 8', '#8 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(15, 1, 'produto 9', '#9 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', ''),
(17, 0, 'produto 10', '#10 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `telefone`) VALUES
(1, 'caroldosreis97@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Carolaine', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
