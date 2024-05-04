-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para grupo4
CREATE DATABASE IF NOT EXISTS `grupo4` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `grupo4`;

-- A despejar estrutura para tabela grupo4.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mensagem` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela grupo4.contactos: 8 rows
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` (`id`, `nome`, `email`, `mensagem`) VALUES
	(8, 'jose', 'zepedro002@gmail.com', 'teste'),
	(9, 'jose', 'zepedro002@gmail.com', 'teste2'),
	(10, 'jose', 'zepedro002@gmail.com', 'teste3'),
	(11, 'jose', 'zepedro002@gmail.com', 'teste4'),
	(13, '', '', ''),
	(14, 'jose', 'zepedro002@gmail.com', 'teste6'),
	(15, 'ze', 'zepedro002@gmail.com', 'testef'),
	(16, 'jose', 'zepedro002@gmail.com', 'testefinal');
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;

-- A despejar estrutura para tabela grupo4.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categoria` tinyint DEFAULT '1',
  `nome` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imagem` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `quantidade` int NOT NULL DEFAULT '0',
  `visivel` tinyint NOT NULL DEFAULT '1',
  `descricao` text,
  `novidades` tinyint DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela grupo4.produtos: 24 rows
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `categoria`, `nome`, `imagem`, `preco`, `quantidade`, `visivel`, `descricao`, `novidades`) VALUES
	(1, 1, 'Proteína Extreme', 'proteina.png', 40, 10, 1, 'A proteína whey ultrafiltrada do Xtreme Whey é uma ótima fonte de Aminoácidos de Cadeia Ramificada (BCAA) naturalmente presentes, bem como de Glutamina e precursores, e contribui para o crescimento e manutenção da massa muscular. Para facilitar o processo de digestão da proteína, a fórmula foi enriquecida com o complexo patenteado DigeZyme®, uma mistura de enzimas digestivas. E, como toque final, o Xtreme Whey contém 12 vitaminas, incluindo as vitaminas C e D, para obteres aquela vantagem extra.', 1),
	(2, 1, 'Creatina Monohidratada', 'creatina.png', 29, 5, 1, 'A Creatina Mono-Hidratada aumenta o desempenho físico em exercícios repetidos de curta duração e alta intensidade.', 1),
	(3, 1, 'Creatina Creapure', 'creatinac.png', 34, 20, 1, 'Com o tempo, a ciência demonstrou que a creatina cumpre todos os requisitos para ser considerada um suplemento seguro e extremamente importante, desde que tomada de forma adequada.\r\n\r\nA Creatine Creapure® contém creatina mono-hidratada de qualidade superior para quem não se contenta com menos do que o melhor desempenho e os melhores resultados!', 1),
	(4, 1, 'BCAA', 'bcaa.png', 20, 5, 1, 'A importância dos BCAA reside na forma como o organismo os metaboliza e nos processos biológicos que desencadeia. Este suplemento fornece-te leucina, isoleucina e valina numa proporção de 2:1:1, respetivamente.', 1),
	(5, 1, 'Proteina Vegetal', 'proteinav.png', 50, 5, 1, 'Os vegans e os vegetarianos conseguem uma ingestão de proteína adequada diariamente por meio de vários alimentos, de soja e cereais a frutos secos e grãos. Contudo, as refeições devem ser bem pensadas, o que significa planear com antecedência e ter várias opções prontas para levar para o trabalho ou para um jantar tardio mais rápido.', 1),
	(7, 2, 'Manteiga de Amendoim', 'manteiga.png', 10, 5, 1, 'A manteiga de amendoim é feita com apenas um ingrediente: amendoim. É o creme para barrar mais delicioso e natural ou o toque a frutos secos dos teus batidos. Além de serem uma fonte saudável de proteína, os amendoins também oferecem uma quantidade equilibrada de fibra, vitamina E e magnésio.', 1),
	(8, 2, 'Barra de Proteina Baunilha', 'barrap.png', 1, 50, 1, 'O Protein Snack da Xcore Nutrition é a barra proteica perfeita para incluíres no teu programa alimentar e de treino. Esta barra foi especialmente pensada para atletas, que apenas exigem o melhor, mas também é adequada a todos os que querem aumentar a sua ingestão de proteína, sem abusar nas calorias. ', 1),
	(9, 2, 'Brownie', 'brownie.png', 2, 50, 1, 'Com o nosso Zero Brownie, já não tens de resistir. Como tem zero adição de açúcares, podes desfrutar desta delícia sem culpa. O nosso brownie tem a textura ideal: é húmido, fofo e rico, não demasiado pegajoso nem denso. É simplesmente perfeito.', 1),
	(10, 2, 'Bara de Proteina Gourmet', 'barrapc.png', 2, 50, 1, 'O Protein Snack zero é a barra proteica perfeita para incluíres no teu programa alimentar e de treino. Esta barra foi especialmente pensada para atletas, que apenas exigem o melhor, mas também é adequada a todos os que querem aumentar a sua ingestão de proteína, sem abusar nas calorias. ', 1),
	(11, 2, 'Zero Chips', 'zchips.png', 2, 20, 1, 'As Zero Protein Chips são a escolha perfeita que te permite desfrutar de um autêntico snack picante, mas com a certeza de que estás a fazer uma escolha muito mais saudável, se as conjugares com um regime alimentar equilibrado no dia a dia.', 2),
	(13, 3, 'Meia de Cano Médio', 'meia.png', 16, 10, 1, 'As Meias de Cano Médio Comptech Endurance Cushioned - Royal Blue são meias de compressão que melhoram o fluxo sanguíneo e arrefecem. A parte inferior reduz o impacto desde o calcanhar até aos dedos.', 1),
	(14, 3, 'Calças de Fato de Treino', 'calcasft.png', 20, 5, 1, 'As Calças de treino Clubhouse - Black têm um ajuste mais largo e permitem a evaporação de ar e suor, para maior frescura durante e após o treino.', 1),
	(15, 3, 'Sweat', 'sweat.png', 20, 5, 1, 'A Camisola com capuz Clubhouse - Black tem um ajuste oversized e é produzida a partir de uma malha elaborada e mais pesada, mas macia. Perfeita como camada pós-treino.', 2),
	(16, 3, 'Balaclava', 'balaclava.png', 25, 10, 1, 'A Balaclava - Beige é uma peça de malha super macia e incrivelmente leve. Equipamento para superares os teus recordes pessoais.', 2),
	(20, 4, 'Fitas para musculação', 'fitas.png', 15, 10, 1, 'As Fitas de Algodão para Musculação 2.0 - Par (2) - - Black proporcionam melhor aderência e aliviam a tensão das mãos e pulsos. Em algodão resistente e acolchoadas para maior conforto. Experimenta!', 1),
	(21, 4, 'Kit de barras de Pilates', 'pilates.png', 50, 30, 1, 'Conjunto para exercitar o corpo todo', 1),
	(22, 4, 'Halteres de água', 'halteragua.png', 70, 30, 1, 'Onde quer que estejas, há sempre uma forma conveniente de te manteres em forma! Embarca numa viagem com uma bagagem leve como uma pena, e enche os teus halteres com água à chegada de modo a obteres o peso de que precisas para o teu treino.', 1),
	(23, 4, 'Kettebell de água', 'kettlebel.png', 70, 30, 1, 'O kettlebell de enchimento com água WaterWorks© utiliza a física para desenvolver o teu corpo além do halterofilismo.', 1),
	(24, 4, 'Haltere Ajustável', 'pesos.png', 220, 30, 1, 'À medida que ficas mais forte e exiges mais peso, terás de arranjar pesos novos, e mais pesados. Quando deres por ti, terás uma pirâmide de halteres em casa! Qual é a alternativa? Um único conjunto de halteres ajustáveis, com uma variedade de cargas!', 2),
	(18, 3, 'T-Shirt Branca Oversized', 'tshirt.png', 25, 10, 1, 'Desenvolvida em laboratório TurboCotton©, incrivelmente macia, com propriedades de evaporação de humidade e de secagem rápida.', 1),
	(17, 3, 'Sapatilhas Destroyer Recovery', 'crocs.png', 25, 10, 1, 'Apresentamos as sapatilhas Destroyer Recovery, super leves, muito respiráveis e criadas para te dar suporte, desenhadas para um conforto incrível e para acelerar a tua recuperação pós-treino.', 1),
	(19, 4, 'Corda Standard Speed', 'corda.png', 25, 10, 1, 'A corda Standard Speed possui um cabo de aço revestido e um sistema de rolamento para velocidade, suavidade e durabilidade, para que possas treinar à tua vontade. Podes ter a certeza de que irá fazer o teu coração bater mais depressa!', 2),
	(12, 2, 'Muffin Proteico', 'muffin.png', 4, 20, 1, 'Prazer E disciplina, sabor E foco, como isso soa? Os nossos Muffins de Proteína dão-lhe a oportunidade de se deliciar sem abandonar os seus objetivos de dieta. Como? Reformulando minuciosamente a receita clássica do muffin, é assim!', 1),
	(6, 1, 'Glutamina', 'glutamina.png', 40, 5, 1, 'A Glutamina é um aminoácido (unidades estruturais das proteínas) que se encontra naturalmente no corpo e está presente na tua dieta proteica diária e em proteínas animais e vegetais.', 2);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- A despejar estrutura para tabela grupo4.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela grupo4.users: ~6 rows (aproximadamente)
INSERT INTO `users` (`id_user`, `username`, `email`, `passw`) VALUES
	(5, 'zepedro', 'zepedro002@gmail.com', '123'),
	(6, 'zepedro', 'a2020146437@alumni.iscac.pt', '123'),
	(7, 'zepedro', 'jpedro@iscac.pt', '123'),
	(8, 'zepedro', 'jl@gmail.com', '123'),
	(9, 'zepedro', 'jk.pedro@gmail.com', '123'),
	(10, 'apresentacao', 'apresentacao@gmail.com', '123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
