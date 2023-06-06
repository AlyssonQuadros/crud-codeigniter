CREATE DATABASE manyminds;
USE manyminds;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `num` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `excluido` int(11) NOT NULL DEFAULT 0,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_cliente`,`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `clientes` (`id_cliente`,`nome`,`cpf`,`data_nasc`,`cidade`,`estado`,`rua`,`num`,`cep`,`telefone`,`excluido`,`data_cadastro`)
VALUES (1,'Carlos Carlos Carlos Carlos', '999.999.999-99', '2001-05-25', 'Ponta Grossa', 'Paraná', 'Joao Boneti do Santos',
'999', '99999-999', '(42)999999999', '0', '2023-05-25 19:42:12');
INSERT INTO `clientes` (`id_cliente`,`nome`,`cpf`,`data_nasc`,`cidade`,`estado`,`rua`,`num`,`cep`,`telefone`,`excluido`,`data_cadastro`)
VALUES (2,'Jorge Jorge Jorge Jorge', '888.888.888-88', '1998-02-15', 'Curitiba', 'Paraná', 'Jorge Boneti do Santos',
'888', '88888-888', '(42)888888888', '0', '2023-05-25 19:43:12');
INSERT INTO `clientes` (`id_cliente`,`nome`,`cpf`,`data_nasc`,`cidade`,`estado`,`rua`,`num`,`cep`,`telefone`,`excluido`,`data_cadastro`)
VALUES (3,'Paulo Paulo Paulo Paulo', '777.777.777-77', '1997-06-08', 'São Paulo', 'São Paulo', 'Paulo Boneti do Santos',
'777', '77777-777', '(42)777777777', '0', '2023-05-25 19:44:12');
