-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Ago-2022 às 21:39
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_escola`
--
CREATE DATABASE IF NOT EXISTS `bd_escola` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `Matricula` varchar(5) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `CodCurso` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`Matricula`, `Nome`, `Endereco`, `Cidade`, `CodCurso`) VALUES
('10001', 'Marcos Moares', 'Rua Pe Roque, 2057', 'Mogi Mirim', '01'),
('10002', 'Maria Conceição Lopes', 'Rua Araras, 23', 'Mogi Guaçu', '01'),
('10003', 'Ana Carina Lopes', 'Rua Peraltas, 222', 'Santos', '01'),
('10004', 'Carlos Aguiar', 'Rua Botafogo, 33', 'Santos', '01'),
('10005', 'André Luiz dos Santos', 'Rua Lopes Conte, 3343', 'Sapucaí', '01'),
('10006', 'Pedro Antonio Pimenta', 'Rua Altair Lopes, 33', 'Itapira', '02'),
('10007', 'Rita de Cássia da Silva', 'Rua das Eletromais, 33', 'Itapira', '02'),
('10008', 'Caique dos Santos', 'Rua das Amoreiras, 55', 'Campinas', '02'),
('10009', 'Carlos Tavares', 'Rua Peixe, 99', 'Santos', '02'),
('10010', 'Antonio Carlos Caetano', 'Rua Josefina Alface, 987', 'Campinas', '02'),
('10011', 'Ricardo Moreira', 'Rua do Pinhal, 332', 'Aparecida', '03'),
('10012', 'Richardson S. P. Campeao', 'Rua do Tricolor, 433', 'São Paulo', '03'),
('10013', 'Junior Camisa Seis', 'Rua do Morumbi, 433', 'São Paulo', '03'),
('10014', 'Carina Melo', 'Rua Osvaldo Ramos, 88', 'Mogi Guaçu', '03'),
('10015', 'Pedro Mello', 'Rua Itororó, 3999', 'Mogi Mirim', '03'),
('10016', 'Andrei Luiz Florêncio', 'Rua dos Limões, 167', 'São Paulo', '01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `CodCurso` int(2) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `CodDisc1` char(2) NOT NULL,
  `CodDisc2` char(2) NOT NULL,
  `CodDisc3` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`CodCurso`, `Nome`, `CodDisc1`, `CodDisc2`, `CodDisc3`) VALUES
(1, 'Auxiliar de Informática', '11', '12', '13'),
(2, 'Programador de Computadores', '21', '22', '23'),
(3, 'Técnico em informática', '31', '32', '33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `CodDisciplina` char(2) NOT NULL,
  `NomeDisciplina` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`CodDisciplina`, `NomeDisciplina`) VALUES
('11', 'Banco de Dados'),
('12', 'Lógica de Programação'),
('13', 'Desenvolvimento de Software 1'),
('21', 'Banco de Dados 2'),
('22', 'Desenvolvimento de Software 2'),
('23', 'Programação de Computadores 1'),
('31', 'Banco de Dados 3'),
('32', 'Programação de Computadores 2'),
('33', 'Desenvolvimento de Software 3'),
('41', 'Programação Web');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`Matricula`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`CodCurso`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`CodDisciplina`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `CodCurso` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Banco de dados: `bd_produto`
--
CREATE DATABASE IF NOT EXISTS `bd_produto` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_produto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `estoque`) VALUES
(12, 'Apontador', 20),
(11, 'Borracha', 50),
(10, 'Lápis', 60),
(9, 'Caneta', 60),
(13, 'Lapiseira', 30),
(14, 'Grafite 12un', 40),
(15, 'Corretivo em fita', 50);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Banco de dados: `bd_rh`
--
CREATE DATABASE IF NOT EXISTS `bd_rh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_rh`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `Cod_Cargo` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`Cod_Cargo`, `Descricao`) VALUES
(1, 'Administrador'),
(2, 'Gestor de RH'),
(3, 'Desenvolvedor de Sistemas'),
(4, 'Consultor Jurídico'),
(5, 'Gerente de Marketing'),
(6, 'Operador'),
(7, 'Analista de Logística'),
(8, 'Analista de Processos'),
(9, 'Atendente'),
(10, 'Contador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `Cod_Dep` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`Cod_Dep`, `Descricao`) VALUES
(1, 'Departamento de Administração'),
(2, 'Departamento de RH'),
(3, 'Departamento de Pesquisa e Desenvolvimento'),
(4, 'Departamento Legal'),
(5, 'Departamento de Marketing'),
(6, 'Departamento de Operações'),
(7, 'Departamento de Logística'),
(8, 'Departamento de Processos'),
(9, 'Departamento de Atendimento ao Cliente'),
(10, 'Departamento de Contabilidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `Matricula` int(11) NOT NULL,
  `Nome-Dependente` varchar(50) NOT NULL,
  `Dt-Nascimento` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dependentes`
--

INSERT INTO `dependentes` (`Matricula`, `Nome-Dependente`, `Dt-Nascimento`) VALUES
(2, 'Lucas Tatiane Alvez', '16/11/2017'),
(3, 'José Vicente Dias', '29/07/2018'),
(4, 'Pedro Tatiane Aragão', '18/02/2019'),
(5, 'Claudia Rebeca Vieira', '05/04/2019'),
(6, 'Josepha Emanuel Araújo', '10/01/2015'),
(7, 'Jéssica Sérgio da Mota', '23/08/2009'),
(8, 'Alice Rodrigo Nunes', '26/06/2011'),
(9, 'Sarah Heloisa da Cruz', '20/05/2018'),
(10, 'Pedro Daiane Melo', '03/10/2015'),
(11, 'Jonas Samuel Viana', '12/12/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Matricula` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Dt-Nasc` varchar(10) NOT NULL,
  `Nacionalidade` varchar(15) NOT NULL,
  `Sexo` varchar(15) NOT NULL,
  `EstCivil` varchar(15) NOT NULL,
  `Rg` varchar(12) NOT NULL,
  `Cic` varchar(14) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Telefone` varchar(17) NOT NULL,
  `Dt-Admissao` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Matricula`, `Nome`, `Dt-Nasc`, `Nacionalidade`, `Sexo`, `EstCivil`, `Rg`, `Cic`, `Endereco`, `Telefone`, `Dt-Admissao`) VALUES
(1, 'Ian Davi Antonio Jesus', '15/02/2004', 'Brasileiro', 'Masculino', 'Solteiro', '19.114.975-5', '655.482.047-77', 'Travessa Salazar 456', '11 98512-5991', '24/04/2022'),
(2, 'Lúcia Liz Tatiane Alves', '15/05/1966', 'Argentina', 'Feminino', 'Casada', '40.963.037-8', '865.397.649-36', 'Rua Brasileiras 431', '11 98192-8065', '15/02/2020'),
(3, 'Sérgio Cauã Vicente Dias', '17/05/1962', 'Mexicano', 'Masculino', 'Viúvo', '42.881.005-6', '128.101.051-03', 'Rua Fortaleza 535', '11 99758-3490', '26/03/2020'),
(4, 'Vera Tatiane Aragão', '14/02/1993', 'Colombiana', 'Feminino', 'Casada', '32.709.807-7', '740.825.211-86', 'Rua Violeta 704', '11 99332-5450', '04/12/2020'),
(5, 'Heloise Lúcia Rebeca Vieira', '17/01/1966', 'Brasileira', 'Feminino', 'Viúva', '31.880.893-6', '826.380.909-64', 'Passagem São Francisco 700', '11 99510-8568', '30/06/2020'),
(6, 'Joaquim Emanuel Araújo', '13/01/1982', 'Alemão', 'Masculino', 'Casado', '15.154.129-2', '368.423.682-94', 'Rua Tamoios 886', '11 99669-9777', '14/08/2020'),
(7, 'Leandro Juan Sérgio da Mota', '14/01/1987', 'Colombiano', 'Masculino', 'Casado', '37.498.192-9', '642.452.598-09', 'Rua José Conrado 967', '11 99832-7175', '02/02/2020'),
(8, 'Breno Rodrigo Nunes', '19/01/1974', 'Brasileiro', 'Masculino', 'Solteiro', '34.415.100-1', '627.693.815-71', 'Rua Doutor Otávio Maia 516', '11 99899-4033', '05/06/2020'),
(9, 'Lívia Heloisa da Cruz', '11/02/1978', 'Brasileira', 'Feminino', 'Casada', '17.795.219-2', '117.120.727-14', 'Rua Irapuã 908', '11 98222-4932', '04/11/2020'),
(10, 'Andrea Pietra Daiane Melo', '11/02/1971', 'Brasileira', 'Feminino', 'Solteira', '41.953.293-6', '527.331.274-46', 'Rua Fábio Antonio Manoel 476', '11 99175-0975', '26/09/2020'),
(11, 'Tiago Renan Samuel Viana', '18/02/1942', 'Argentino', 'Masculino', 'Viúvo', '20.062.758-2', '907.149.032-72', 'Travessa Guanabara 773', '11 98437-5577', '09/03/2020'),
(12, 'Enrico Julio Benjamin Lopes', '14/05/1974', 'Francês', 'Masculino', 'Casado', '22.176.499-9', '934.805.068-01', 'Rua da Vitória', '11 99878-5058', '15/10/2020'),
(13, 'Caleb Luan Ramos', '06/04/1963', 'Indiano', 'Masculino', 'Viúvo', '40.098.706-5', '424.813.908-14', 'Rua Meire Alves da Silva', '11 99698-9708', '28/08/2020'),
(14, 'Lúcia Laís Duarte', '24/03/1948', 'Francesa', 'Feminino', 'Viúva', '26.587.378-2', '063.971.170-73', 'Rua Estrela do Oriente 751', '11 98622-3310', '25/09/2020'),
(15, 'Isabelle Francisca da Conceição', '07/05/1961', 'Francesa', 'Feminino', 'Casada', '37.599.191-8', '645.315.806-05', 'Rua Desportista Carlos Gonzaga Brêda Júnior 151', '11 99647-5238', '04/08/2020');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotacao`
--

CREATE TABLE `lotacao` (
  `Matricula` int(11) NOT NULL,
  `Cod_Dep` int(11) NOT NULL,
  `Dt-Inicio` varchar(10) NOT NULL,
  `Dt-fim` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lotacao`
--

INSERT INTO `lotacao` (`Matricula`, `Cod_Dep`, `Dt-Inicio`, `Dt-fim`) VALUES
(1, 1, '24/04/2022', 'N/A'),
(2, 1, '15/02/2020', 'N/A'),
(3, 2, '26/03/2020', 'N/A'),
(4, 2, '04/12/2020', 'N/A'),
(5, 3, '30/06/2020', 'N/A'),
(6, 3, '14/08/2020', 'N/A'),
(7, 4, '02/02/2020', 'N/A'),
(8, 4, '05/06/2020', 'N/A'),
(9, 5, '04/11/2020', 'N/A'),
(10, 5, '26/09/2020', 'N/A'),
(11, 6, '09/03/2020', 'N/A'),
(12, 7, '15/10/2020', 'N/A'),
(13, 8, '28/08/2020', 'N/A'),
(14, 9, '25/09/2020', 'N/A'),
(15, 10, '04/08/2020', 'N/A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupacao`
--

CREATE TABLE `ocupacao` (
  `Matricula` int(11) NOT NULL,
  `Cod_Cargo` int(11) NOT NULL,
  `Dt-Inicio` varchar(10) NOT NULL,
  `Dt-fim` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ocupacao`
--

INSERT INTO `ocupacao` (`Matricula`, `Cod_Cargo`, `Dt-Inicio`, `Dt-fim`) VALUES
(1, 1, '24/04/2022', 'N/A'),
(2, 1, '15/02/2020', 'N/A'),
(3, 2, '26/03/2020', 'N/A'),
(4, 2, '04/12/2020', 'N/A'),
(5, 3, '30/06/2020', 'N/A'),
(6, 3, '14/08/2020', 'N/A'),
(7, 4, '02/02/2020', 'N/A'),
(8, 4, '05/06/2020', 'N/A'),
(9, 5, '04/11/2020', 'N/A'),
(10, 5, '26/09/2020', 'N/A'),
(11, 6, '09/03/2020', 'N/A'),
(12, 7, '15/10/2020', 'N/A'),
(13, 8, '28/08/2020', 'N/A'),
(14, 9, '25/09/2020', 'N/A'),
(15, 10, '04/08/2020', 'N/A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Cod_Cargo`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Cod_Dep`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `Cod_Cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Cod_Dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Banco de dados: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bd_escola\",\"table\":\"cursos\"},{\"db\":\"bd_escola\",\"table\":\"disciplinas\"},{\"db\":\"bd_escola\",\"table\":\"alunos\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-08-15 19:32:13', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"pt\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Índices para tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Índices para tabela `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Índices para tabela `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Índices para tabela `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Índices para tabela `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Índices para tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Índices para tabela `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Índices para tabela `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Índices para tabela `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Índices para tabela `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Índices para tabela `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Índices para tabela `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Índices para tabela `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
