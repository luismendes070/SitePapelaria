-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `papelaria2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(11) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_nascimento` date NOT NULL,
  `rg` varchar(8) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `telefone_loja1` varchar(10) NOT NULL,
  `telefone_loja2` varchar(10) NOT NULL,
  `telefone_loja3` varchar(10) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `situacao` varchar(50) NOT NULL,
  `nome_loja1` varchar(50) NOT NULL,
  `nome_loja2` varchar(50) NOT NULL,
  `nome_loja3` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `data_cadastro`, `data_nascimento`, `rg`, `telefone`, `telefone_loja1`, `telefone_loja2`, `telefone_loja3`, `endereco`, `situacao`, `nome_loja1`, `nome_loja2`, `nome_loja3`, `nome`) VALUES
('123', '2013-10-15', '2013-10-09', '1234567', '6452415434', '6492411536', '6412345638', '6412345386', 'Rua da Alegria', 'true', 'Eletrozema', 'Casas Bahia', 'Ponto Frio', 'Carlos Sampaio Silva '),
('32222222222', '2013-10-03', '1983-10-11', '23456781', '6452415434', '6492411546', '6412345638', '6412345386', 'Avenida Anhanguera', 'true', 'Eletrozema', 'Casas Bahia', 'Ponto Frio', 'Carlos Silva'),
('98712345610', '2013-10-02', '1983-10-10', '45678912', '6578901234', '6412345678', '6456781234', '6412345678', 'Rua Aeroporto', 'true', 'Dom Bosco', 'Ricardo Eletro', 'Shoptime', 'Estevão Gonçalves');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `cnpj` varchar(14) NOT NULL,
  `nome_funcionario` varchar(50) NOT NULL,
  `telefone_funcionario` varchar(50) NOT NULL,
  `nome_empresa` varchar(50) NOT NULL,
  `telefone_empresa` varchar(50) NOT NULL,
  PRIMARY KEY (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`cnpj`, `nome_funcionario`, `telefone_funcionario`, `nome_empresa`, `telefone_empresa`) VALUES
('09876543211011', 'Rodrigo Moreira', '6499550861', 'Canetas SA', '6299550706'),
('12333334456789', 'Afonso de Lima', '6234567890', 'Credeal ', '6123456789'),
('1234567891011', 'Paulo José', '6499550601', 'Lápis SA', '6299550602'),
('32546151623517', 'Silvia Andrade', '4512345678', 'Kingston', '1389672345'),
('76457453256571', 'Guilherme José', '1234567890', 'Multilazer', '1234567890'),
('816109876011', 'Ricardo Almeida', '1198761234', 'NOS Mochilas', '1138782345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `telefone`, `login`, `senha`) VALUES
('', '', '', '', ''),
('05020868159', 'Luís Mendes Machado', '6492411436', 'luismendes', '123456'),
('11111111111', 'Fulano Ciclano', '6292414135', 'fulano', '123456'),
('123456789', 'Luis2', '6234567890', 'luis2', '123456'),
('22222222222', 'Pedro Silva', '6492413614', 'pedrosilva', '123456'),
('23571113', 'Gustavo Martins', '6434651989', 'gustavo', '123456'),
('33333333333', 'Selma Saraieva', '6233456789', 'selma', '123456'),
('55555555555', 'Luciano Lemes', '6412345678', 'luciano', '123456'),
('99999999999', 'JosÃ© Paulo Roberto', '6253456789', 'josepaulo', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `cpf_funcionario` varchar(11) NOT NULL,
  `cod_pedido` varchar(10) NOT NULL,
  `data_entrega` date NOT NULL,
  `data_compra` date NOT NULL,
  `data_pagamento` date NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`cod_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `cod_barras` varchar(13) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `porcentagem` double NOT NULL,
  `qtde_estoque` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor_custo` double NOT NULL,
  `marca` varchar(50) NOT NULL,
  `preco_venda` double NOT NULL,
  `nome_imagem` varchar(50) NOT NULL,
  `cnpj_fornecedor` varchar(14) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  PRIMARY KEY (`cod_barras`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_barras`, `descricao`, `porcentagem`, `qtde_estoque`, `nome`, `valor_custo`, `marca`, `preco_venda`, `nome_imagem`, `cnpj_fornecedor`, `categoria`) VALUES
(' 593238083294', 'Fone de ouvido com microfone profissional', 10, 12, 'Fone de ouvido', 99, 'Bright', 99, 'fonedeouvidoprofissional', '', 'informática'),
('1789509136509', 'Caderno univ.capa dura 1x1 96 fls pt.Brief Case 91', 10, 10, 'Caderno universitário', 5.4, 'Spiral', 5.6, 'cadernouniversitariocapadura', '1234567891011', 'escolar'),
('2433182433181', 'Pen Drive 8gb vermelho DT101G2 Kingston CX 1 UN', 10, 20, 'Pen drive 8 GB', 35, 'Kingston', 35.6, 'pendrive8gb', '32546151623517', 'informática'),
('4761024761021', 'Papel sulfite 75g alcalino 210x297 A4 chamex offic', 10, 3, 'Papel sulfite ', 15, 'Chamex', 15, 'papelsulfite', '', 'escolar'),
('7891234567891', 'Mini Mochila do Batman ', 10, 3, 'Mochila Batman', 100, 'NOS', 110, 'mochilabatman', '1234567891011', 'escolar'),
('7891357789134', 'Mochila de costas 3 bolsos preta', 10, 13, 'Mochila do Homem Aranha', 110, 'NOZ', 130, 'mochilahomemaranha', '816109876011', 'escolar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `codigoVenda` varchar(20) NOT NULL,
  `cpfCliente` varchar(20) NOT NULL,
  `quantidadeProduto` varchar(10) NOT NULL,
  `cpfFuncionario` varchar(20) NOT NULL,
  `codBarrasProduto` varchar(20) NOT NULL,
  `dataVenda` varchar(10) NOT NULL,
  PRIMARY KEY (`codigoVenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`codigoVenda`, `cpfCliente`, `quantidadeProduto`, `cpfFuncionario`, `codBarrasProduto`, `dataVenda`) VALUES
('1', '11111111111', '1', '05020868159', ' 176072176072', '2013-10-03'),
('123345', '123', '123', '5020868159', '176072176072', '12122012'),
('2', '123', '1', '1', '1', '1'),
('3', '98712345610', '5', '5020868159', '176072176072', '1994'),
('5', '98712345610', '1', '5020868159', '1911111111112', '1012013'),
('6', '98712345610', '1', '5020868159', '1911111111112', '3042013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
