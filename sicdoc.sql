-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Fev-2018 às 15:29
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicdoc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(255) NOT NULL,
  `_sigla` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`_id`, `_nome`, `_sigla`) VALUES
(-1, 'Nada', 'NADA'),
(1, 'Back-Office', 'BCK'),
(2, 'Gerência', 'GRC'),
(3, 'Técnico', 'TEC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(50) DEFAULT NULL,
  `_genero` char(1) DEFAULT NULL,
  `_estado_civil` varchar(50) DEFAULT NULL,
  `_bi` varchar(50) DEFAULT NULL,
  `_nif` varchar(50) DEFAULT NULL,
  `_nome_esposa` varchar(50) DEFAULT NULL,
  `_n_bi_esposa` varchar(50) DEFAULT NULL,
  `_regime_casamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`_id`, `_nome`, `_genero`, `_estado_civil`, `_bi`, `_nif`, `_nome_esposa`, `_n_bi_esposa`, `_regime_casamento`) VALUES
(7, 'Emanuel Silva', 'm', 'Viúvo', '00032434LA033', '10032434LA043', NULL, '', NULL),
(9, 'Kenia Miguel', 'f', 'Divolciada', '004656237LA987', '004656237LA0427', NULL, '', NULL),
(16, 'Maria Pereira', 'f', 'Casada', '00483839048LA012', '994849489LA554', 'Luis Pereira', '00477822048LA011', 'Comunha de bens adiquiridas'),
(19, 'Neidy Afonso', 'f', 'Solteira', '00053240948MO033', '9831230', NULL, NULL, NULL),
(20, 'Raul Sivla', '', 'Casado', '000002145', '0000201254', 'Jandira Silva', '02145', 'Comunha de bens adiquiridas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE `conta` (
  `_id` int(11) NOT NULL,
  `_telefone` varchar(50) DEFAULT NULL,
  `_utilizador` varchar(50) DEFAULT NULL,
  `_senha` varchar(50) DEFAULT NULL,
  `_estado` int(11) DEFAULT NULL,
  `_id_funcionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`_id`, `_telefone`, `_utilizador`, `_senha`, `_estado`, `_id_funcionario`) VALUES
(1, '919180604', 'joao.pereira', '7db00d6a7d1d7c38eba03e04ac90f733', 1, 1),
(2, '912977521', 'raul.silva', '7db00d6a7d1d7c38eba03e04ac90f733', 1, 2),
(3, '929404879', 'noemia.cabuita', '7db00d6a7d1d7c38eba03e04ac90f733', 1, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_gerado`
--

CREATE TABLE `doc_gerado` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(100) DEFAULT NULL,
  `_caminho` varchar(50) DEFAULT NULL,
  `_tipo` varchar(50) DEFAULT NULL,
  `_id_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doc_gerado`
--

INSERT INTO `doc_gerado` (`_id`, `_nome`, `_caminho`, `_tipo`, `_id_imovel`) VALUES
(1, 'informatica.jpg', 'public/images/doc_gerado/', 'pagamento', 6),
(2, 'Certificado ITL Impl.pdf', 'public/images/doc_gerado/', 'sisa', 6),
(3, 'ccna_1.jpg', 'public/images/doc_gerado/', 'certidao-matricial', 6),
(4, 'ccna_2.jpg', 'public/images/doc_gerado/', 'escritura-publica', 6),
(5, 'digitacao.jpg', 'public/images/doc_gerado/', 'registo-predial', 6),
(6, 'CURRICULUM VITAE - Cabuita.pdf', 'public/images/doc_gerado/', 'pagamento', 16),
(7, 'Apresentação1.pdf', 'public/images/doc_gerado/', 'pagamento', 1),
(8, NULL, NULL, 'sisa', 1),
(9, NULL, NULL, 'certidao-matricial', 1),
(10, NULL, NULL, 'pagamento', 17),
(11, NULL, NULL, 'sisa', 17),
(12, NULL, NULL, 'certidao-matricial', 17),
(13, 'Folheto-Vinda-atualizado2017.pdf', 'public/images/doc_gerado/', 'escritura-publica', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doc_pessoal`
--

CREATE TABLE `doc_pessoal` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(100) DEFAULT NULL,
  `_caminho` varchar(100) DEFAULT NULL,
  `_tipo` varchar(50) DEFAULT NULL,
  `_id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doc_pessoal`
--

INSERT INTO `doc_pessoal` (`_id`, `_nome`, `_caminho`, `_tipo`, `_id_cliente`) VALUES
(3, 'Joao Pereira.jpg', 'public/images/doc_pessoal/', 'bi-compr', 9),
(4, '20170306084917479.pdf', 'public/images/doc_pessoal/', 'nif-compr', 9),
(5, 'Certificado ITIL Foun.pdf', 'public/images/doc_pessoal/', 'bi-vend', 9),
(6, 'c_eleitoral.jpg', 'public/images/doc_pessoal/', 'nif-vend', 9),
(7, 'ccna_1.jpg', 'public/images/doc_pessoal/', 'contrato-vend', 9),
(8, 'b_i_sonia.pdf', 'public/images/doc_pessoal/', 'bi-compr', 7),
(9, 'informatica.jpg', 'public/images/doc_pessoal/', 'nif-compr', 7),
(10, 'CURRICULUM VITAE - Cabuita.pdf', 'public/images/doc_pessoal/', 'bi-compr', 19),
(11, 'nif_sonia.pdf', 'public/images/doc_pessoal/', 'nif-compr', 19),
(12, 'DECLARAÇÃO COM NOTAS.pdf', 'public/images/doc_pessoal/', 'bi-vend', 19),
(13, 'CURRICULUM VITAE_Fontes.pdf', 'public/images/doc_pessoal/', 'nif-vend', 19),
(14, '1-estrela.jpg', 'public/images/doc_pessoal/', 'bi-esposa', 16),
(15, NULL, NULL, 'bi-compr', 20),
(16, NULL, NULL, 'nif-compr', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `_id` int(11) NOT NULL,
  `_id_vendedor` int(11) NOT NULL,
  `_certidao_comercial` varchar(50) NOT NULL,
  `_nome_representate` varchar(50) NOT NULL DEFAULT '0',
  `_n_bi_representate` varchar(50) NOT NULL DEFAULT '0',
  `_bi_representate` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`_id`, `_id_vendedor`, `_certidao_comercial`, `_nome_representate`, `_n_bi_representate`, `_bi_representate`) VALUES
(1, 5, '', 'Manuel Tavares', '001656237LA433', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(50) DEFAULT NULL,
  `_fase` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`_id`, `_nome`, `_fase`) VALUES
(1, 'Pendente de Pagamento', 'Pré-Registo'),
(2, 'Pendente das Finanças', 'Execução'),
(3, 'Pendente de Escritura', 'Execução'),
(4, 'Pendente de Registo', 'Execução'),
(5, 'Concluído', 'Conclusão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fatura`
--

CREATE TABLE `fatura` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(50) DEFAULT NULL,
  `_caminho` varchar(500) NOT NULL,
  `_id_movel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(100) DEFAULT NULL,
  `_apelido` varchar(100) DEFAULT NULL,
  `_num_bi` varchar(50) DEFAULT NULL,
  `_data_nascimento` date DEFAULT NULL,
  `_genero` varchar(50) DEFAULT NULL,
  `_telefone` varchar(50) DEFAULT NULL,
  `_email` varchar(50) DEFAULT NULL,
  `_morada` varchar(50) DEFAULT NULL,
  `_id_area` int(11) DEFAULT NULL,
  `_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`_id`, `_nome`, `_apelido`, `_num_bi`, `_data_nascimento`, `_genero`, `_telefone`, `_email`, `_morada`, `_id_area`, `_foto`) VALUES
(1, 'Joao', 'Pereira', '004656237LA042', '1992-09-12', 'm', '919180604', 'joao.pereira@sicdoc.ao', 'Nova Vida', 1, '000834jfp.jpg'),
(2, 'Raul', 'Silva', '004651234LA042', '1986-11-24', 'm', '912977521', 'raul.silva@sicdoc.ao', 'Camama', 2, 'Rafael.jpg'),
(8, 'Noemia', 'Cabuita', '00445004LA042', '1996-08-06', 'f', '929404879', 'soniacabuita@gmail.com', 'Talatona', 1, 'left.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `_id` int(11) NOT NULL,
  `_n_processo` varchar(50) DEFAULT NULL,
  `_nome_condominio` varchar(50) DEFAULT NULL,
  `_tipo_imovel` varchar(50) DEFAULT NULL,
  `_n_descricao_predio` varchar(50) DEFAULT NULL,
  `_matriz_predial` varchar(50) DEFAULT NULL,
  `_valor` float DEFAULT NULL,
  `_id_cliente` int(11) DEFAULT NULL,
  `_id_vendedor` int(11) DEFAULT NULL,
  `_id_estado` int(11) DEFAULT NULL,
  `_data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`_id`, `_n_processo`, `_nome_condominio`, `_tipo_imovel`, `_n_descricao_predio`, `_matriz_predial`, `_valor`, `_id_cliente`, `_id_vendedor`, `_id_estado`, `_data_criacao`) VALUES
(1, 'NV01', 'Nova Vida', 'Terreno', '142', NULL, 100000, 9, 11, 3, '2018-02-01 17:20:44'),
(6, 'MA01', 'Mutamba', 'Habitação', '42', NULL, 300000, 7, 5, 5, '2018-01-28 17:23:58'),
(13, 'BV01', 'Boa Vida', 'Terreno', 'E120', NULL, 100400000, 16, 12, 1, '2017-02-01 17:25:06'),
(16, 'TS01', 'Torres', 'Terreno', '096', NULL, 2800000, 19, 15, 2, '2018-02-20 23:00:00'),
(17, 'CA01', 'Camama', 'Habita&ccedil;&atilde;o', '01254', NULL, 12540000, 20, 16, 4, '2018-02-24 23:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

CREATE TABLE `localizacao` (
  `_id` int(11) NOT NULL,
  `_n_condominio` varchar(50) DEFAULT NULL,
  `_quadra` varchar(50) DEFAULT NULL,
  `_lote` varchar(50) DEFAULT NULL,
  `_tipo_habitacao` varchar(50) DEFAULT NULL,
  `_tipo_lote` varchar(50) DEFAULT NULL,
  `_metragem_habitacao` varchar(50) DEFAULT NULL,
  `_metragem_lote` varchar(50) DEFAULT NULL,
  `_id_imovel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `localizacao`
--

INSERT INTO `localizacao` (`_id`, `_n_condominio`, `_quadra`, `_lote`, `_tipo_habitacao`, `_tipo_lote`, `_metragem_habitacao`, `_metragem_lote`, `_id_imovel`) VALUES
(1, '123', 'B19', 'L55', 'habitacao1', 'Lote1', '20x15', '200x150', 1),
(8, '241', 'Q16', 'B9', 'habitacao2', 'Lote1', '20x20', '100x100', 13),
(11, '101', 'Q13', 'L45', 'T3', 'Lote1', '5x3', '12x12', 16),
(12, '228', 'Q133', 'L54', 'T2', 'Lote2', '10x10', '100x150', 6),
(13, '012', '25', '12', 'T2', 'Lote1', '12000', '1200', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_fisica`
--

CREATE TABLE `pessoa_fisica` (
  `_id` int(11) NOT NULL,
  `_id_vendedor` int(11) DEFAULT NULL,
  `_n_bi` varchar(50) DEFAULT NULL,
  `_bi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa_fisica`
--

INSERT INTO `pessoa_fisica` (`_id`, `_id_vendedor`, `_n_bi`, `_bi`) VALUES
(7, 11, '004983984LA122', '2-estrelas.jpg'),
(8, 12, '004983984LA122', '2-estrelas.jpg'),
(9, 15, '00235687', ''),
(10, 16, '01254', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `_id` int(11) NOT NULL,
  `_nome` varchar(100) NOT NULL DEFAULT '0',
  `_n_nif` varchar(100) NOT NULL DEFAULT '0',
  `_nif` varchar(100) NOT NULL DEFAULT '0',
  `_contrato` varchar(100) NOT NULL DEFAULT '0',
  `_termo_quitacao` varchar(100) NOT NULL DEFAULT '0',
  `_certidao_predial` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`_id`, `_nome`, `_n_nif`, `_nif`, `_contrato`, `_termo_quitacao`, `_certidao_predial`) VALUES
(5, 'Joao Bernado', '31233434LA075', '', '', '', ''),
(11, 'Joao Ant&oacute;nio', '003847874LA844', '', '', '', ''),
(12, 'Manuel Lopes', '003847874LA876', '', '', '', ''),
(15, 'Nilton Joel', '0098653455455', '', '', '', ''),
(16, 'JJ', '01254', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `conta`
--
ALTER TABLE `conta`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `uq_conta_fone` (`_telefone`),
  ADD UNIQUE KEY `uq_conta_user` (`_utilizador`),
  ADD KEY `FK_conta_funcionario` (`_id_funcionario`);

--
-- Indexes for table `doc_gerado`
--
ALTER TABLE `doc_gerado`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_doc_imovel` (`_id_imovel`);

--
-- Indexes for table `doc_pessoal`
--
ALTER TABLE `doc_pessoal`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_doc_pessoal_cliente` (`_id_cliente`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_empresa_vendedor` (`_id_vendedor`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_fatura_imovel` (`_id_movel`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `uq_utliza_bi` (`_num_bi`),
  ADD KEY `FK_funcionario_area` (`_id_area`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_imovel_cliente` (`_id_cliente`),
  ADD KEY `FK_imovel_vendedor` (`_id_vendedor`),
  ADD KEY `FK_imovel_estado` (`_id_estado`);

--
-- Indexes for table `localizacao`
--
ALTER TABLE `localizacao`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_localizacao_imovel` (`_id_imovel`);

--
-- Indexes for table `pessoa_fisica`
--
ALTER TABLE `pessoa_fisica`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `FK_pessoa_fisica_vendedor` (`_id_vendedor`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `conta`
--
ALTER TABLE `conta`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doc_gerado`
--
ALTER TABLE `doc_gerado`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doc_pessoal`
--
ALTER TABLE `doc_pessoal`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fatura`
--
ALTER TABLE `fatura`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `localizacao`
--
ALTER TABLE `localizacao`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pessoa_fisica`
--
ALTER TABLE `pessoa_fisica`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conta`
--
ALTER TABLE `conta`
  ADD CONSTRAINT `FK_conta_funcionario` FOREIGN KEY (`_id_funcionario`) REFERENCES `funcionario` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doc_gerado`
--
ALTER TABLE `doc_gerado`
  ADD CONSTRAINT `FK_doc_imovel` FOREIGN KEY (`_id_imovel`) REFERENCES `imovel` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doc_pessoal`
--
ALTER TABLE `doc_pessoal`
  ADD CONSTRAINT `FK_doc_pessoal_cliente` FOREIGN KEY (`_id_cliente`) REFERENCES `cliente` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `FK_empresa_vendedor` FOREIGN KEY (`_id_vendedor`) REFERENCES `vendedor` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `FK_fatura_imovel` FOREIGN KEY (`_id_movel`) REFERENCES `imovel` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `FK_funcionario_area` FOREIGN KEY (`_id_area`) REFERENCES `area` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `FK_imovel_cliente` FOREIGN KEY (`_id_cliente`) REFERENCES `cliente` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_imovel_estado` FOREIGN KEY (`_id_estado`) REFERENCES `estado` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_imovel_vendedor` FOREIGN KEY (`_id_vendedor`) REFERENCES `vendedor` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `localizacao`
--
ALTER TABLE `localizacao`
  ADD CONSTRAINT `FK_localizacao_imovel` FOREIGN KEY (`_id_imovel`) REFERENCES `imovel` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pessoa_fisica`
--
ALTER TABLE `pessoa_fisica`
  ADD CONSTRAINT `FK_pessoa_fisica_vendedor` FOREIGN KEY (`_id_vendedor`) REFERENCES `vendedor` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
