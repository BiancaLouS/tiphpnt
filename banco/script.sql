-- Database: `iwane047_ti##`
CREATE DATABASE
	IF NOT EXISTS `ti93phpdb01`
    DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
    
USE `ti93phpdb01`;

-- --------------------------------------------------------
-- Estrutura da tabela `tbprodutos`
CREATE TABLE `tbprodutos` (
  `id_produto` int(11) NOT NULL,
  `id_tipo_produto` int(11) NOT NULL,
  `descri_produto` varchar(100) NOT NULL,
  `resumo_produto` varchar(1000) DEFAULT NULL,
  `valor_produto` decimal(9,2) DEFAULT NULL,
  `imagem_produto` varchar(50) DEFAULT NULL,
  `destaque_produto` enum('Sim','Não') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Extraindo dados da tabela `tbprodutos`
INSERT INTO `tbprodutos` (`id_produto`, `id_tipo_produto`, `descri_produto`, `resumo_produto`, `valor_produto`, `imagem_produto`, `destaque_produto`) VALUES
(1, 1, 'Picanha ao alho', ' Esta e a combinação do sabor inconfundível da picanha com o aroma acentuado do alho. Condimento que casa perfeitamente com este corte nobre', 29.90, 'picanha_alho.jpg', 'Sim'),
(2, 1, 'Fraldinha', 'Uma das carnes mais suculentas do cardápio. Requintada, com maciez particular e pouca gordura, e uma carne que chama atenção pela sua textura', 29.90, 'fraldinha.jpg', 'Não'),
(3, 1, 'Costela', 'A mais procurada! Feita na churrasqueira ou ao fogo de chão, e preparada por mais de 08 horas para atingir o ponto ideal e torna-la a referência de nossa churrascaria', 29.90, 'costelona.jpg', 'Sim'),
(4, 1, 'Cupim', 'Uma referência especial dos paulistas. Bastante gordurosa e macia, o cupim e uma carne fibrosa, que se desfia quando bem preparada ', 29.90, 'cupim.jpg', 'Sim'),
(5, 1, 'Picanha ', 'Considerada por muitos como a mais nobre e procurada carne de churrasco, a picanha pode ser servida ao ponto , mal passada ou bem passada. Suculenta e com sua característica capa de gordura', 29.90, 'picanha_sem.jpg', 'Não'),
(6, 2, 'Apfelstrudel', 'Sobremesa tradicional austro-germânica e um delicioso folhado de maça e canela com sorvete', 29.90, 'strudel.jpg', 'Não'),
(7, 1, 'Alcatra', 'Carne com muitas fibras, porém macia. Sua lateral apresenta uma boa parcela de gordura. Equilibrando de forma harmônica maciez e fibras.', 29.90, 'alcatra_pedra.jpg', 'Não'),
(8, 1, 'Maminha', 'Vem da parte inferior da Alcatra. E uma carne com fibras, porém macia e saborosa.', 29.90, 'maminha.jpg', 'Não'),
(9, 2, 'Abacaxi', 'Abacaxi assado com canela ao creme de leite condensado ', 29.90, 'abacaxi.jpg', 'Não');

-- Indexes for table `tbprodutos`
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`id_produto`);

-- AUTO_INCREMENT for table `tbprodutos`
ALTER TABLE `tbprodutos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

-- Estrutura para tabela `tbtipos`
CREATE TABLE `tbtipos` (
  `id_tipo` int(11) NOT NULL,
  `sigla_tipo` varchar(3) NOT NULL,
  `rotulo_tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Despejando dados para a tabela `tbtipos`
INSERT INTO `tbtipos` (`id_tipo`, `sigla_tipo`, `rotulo_tipo`) VALUES
(1, 'chu', 'Churrasco'),
(2, 'sob', 'Sobremesa');

-- Índices de tabela `tbtipos`
ALTER TABLE `tbtipos`
  ADD PRIMARY KEY (`id_tipo`);

-- AUTO_INCREMENT de tabela `tbtipos`
ALTER TABLE `tbtipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- Estrutura para tabela `tbtipos`
CREATE TABLE `tbusuarios` (
  `id_usuario` int(11) NOT NULL,
  `login_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(8) NOT NULL,
  `nivel_usuario` ENUM('sup','com') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Inserindo Dados na Tabela `tbusuarios'
INSERT INTO `tbusuarios` 
	(`id_usuario`, `login_usuario`, `senha_usuario`, `nivel_usuario`) 
	VALUES
		(1, 'senac', '1234', 'sup'),
		(2, 'joao', '456', 'com'),
		(3, 'maria', '789', 'com'),
		(4, 'bianca', '1234', 'sup');

-- Índices de tabela `tbtipos`
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login_usuario_uniq`(`login_usuario`);

-- AUTO_INCREMENT de tabela `tbtipos`
ALTER TABLE `tbusuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
-- Chave estrangeira
ALTER TABLE `tbprodutos`
  ADD CONSTRAINT `id_tipo_produto_fk` FOREIGN KEY (`id_tipo_produto`)
	REFERENCES `tbtipos`(`id_tipo`)
    ON DELETE no action
    ON UPDATE no action;  
    
-- Criando a view vw_tbprodutos
CREATE VIEW vw_tbprodutos AS
	SELECT	p.id_produto,
			p.id_tipo_produto,
            t.sigla_tipo,
            t.rotulo_tipo,
            p.descri_produto,
            p.resumo_produto,
            p.valor_produto,
            p.imagem_produto,
            p.destaque_produto
    FROM tbprodutos p
		JOIN tbtipos t
	WHERE p.id_tipo_produto=t.id_tipo;
COMMIT;

insert into tbtipos (id_tipo, sigla_tipo, rotulo_tipo) values ('3', 'beb', 'Bebida');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('10', '2', 'Mousse de Chocolate', 'Delicioso mousse de chocolate, cremoso que derrete na boca', '29.90', 'mousse_choco.jpg', 'Não');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('11', '2', 'Pudim de Leite', 'Pudim de Leite com aquele gostinho caseiro, feito com os melhores ingredientes para fechar o seu churrasco.', '29.90', 'pudim.jpg', 'Sim');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('12', '2', 'Torta Gateau', 'Surpreendente torta sem farinha feito com aquele blend de chocolate exclusivo que derrete na boca', '29.90', 'torta_gateau.jpg', 'Não');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('13', '3', 'Caipirinha', 'Capirinha gelada para refrescar seu dia', '29.90', 'caipirinha.webp', 'Não');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('14', '3', 'Negroni', 'Coquetel feito de uma parte de gim, uma parte de vermute rosso (vermelho, semidoce), e uma parte de Campari, enfeitado com casca de laranja.', '29.90', 'negroni.jpeg', 'Não');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('15', '3', 'Sangria', 'É Um drink de Uva,Tangerina, Champagne e Vinho Moscato,com uma leve refrescancia.', '29.90', 'sangria.jpg', 'Não');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('16', '3', 'Guaraná (Lata)', 'Clássico guaraná lata com opções de tomar com larança ou sem perfeito para aquele churrasco', '29.90', 'refrigerante.jpg', 'Sim');

insert into tbprodutos (id_produto, id_tipo_produto, descri_produto, resumo_produto, valor_produto, imagem_produto, destaque_produto) values ('17', '3', 'Chopp', 'Um Chopp para distrair... acompanhamento perfeito para comer os destaques da casa.', '29.90', 'chopp.webp', 'Sim');

alter table tbusuarios add email varchar(40);
alter table tbusuarios add cpf varchar(14);

CREATE TABLE pedidoReserva(
id int not null auto_increment,
dataAtual datetime not null,
dataFinal datetime not null,
nome varchar(100) not null,
motivo_negativa varchar(100) null,
email varchar(40) not null,
cpf varchar(14) not null,
acompanhantes int not null,
id_status int not null,
constraint pk_pedReserva PRIMARY KEY(id),
constraint fk_pStatus FOREIGN KEY(id) references stats(id));

CREATE TABLE mesa(
id int null auto_increment,
constraint pk_mesa PRIMARY KEY(id),
constraint fk_mStatus FOREIGN KEY(id) references stats(id));

CREATE TABLE stats(
id int null auto_increment,
stats bit,
constraint pk_stats PRIMARY KEY(id));

CREATE TABLE reserva(
id int null auto_increment,
id_status int null,
id_mesa int null,
id_pReserva int null,
constraint pk_reserva PRIMARY KEY(id),
constraint fk_rstatus FOREIGN KEY(id) references stats(id),
constraint fk_rmesa FOREIGN KEY(id) references mesa(id),
constraint fk_rpReserva FOREIGN KEY(id) references pedidoReserva(id));