CREATE DATABASE IF NOT EXISTS vivasangue CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE vivasangue;

CREATE TABLE usuarios (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL UNIQUE,
    senha_hash VARCHAR(255) NOT NULL,
    perfil ENUM('admin','usuario') NOT NULL DEFAULT 'usuario',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE instituicoes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(160) NOT NULL,
    site_oficial VARCHAR(255),
    telefone VARCHAR(30),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE locais (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    instituicao_id INT UNSIGNED NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    regiao VARCHAR(100),
    endereco VARCHAR(255) NOT NULL,
    horario VARCHAR(160),
    tipo_atendimento VARCHAR(100),
    latitude DECIMAL(10,7),
    longitude DECIMAL(10,7),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_locais_instituicao FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id)
);

CREATE TABLE campanhas (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    instituicao_id INT UNSIGNED NOT NULL,
    local_id INT UNSIGNED NOT NULL,
    nome VARCHAR(180) NOT NULL,
    data_campanha DATE NOT NULL,
    horario VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    informacoes TEXT,
    status ENUM('Agendada','Em andamento','Encerrada') NOT NULL DEFAULT 'Agendada',
    tipo_sanguineo_solicitado VARCHAR(20),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_campanhas_instituicao FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id),
    CONSTRAINT fk_campanhas_local FOREIGN KEY (local_id) REFERENCES locais(id)
);

CREATE TABLE interessados (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    campanha_id INT UNSIGNED NOT NULL,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(160) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_interessados_campanha FOREIGN KEY (campanha_id) REFERENCES campanhas(id) ON DELETE CASCADE
);

CREATE TABLE perguntas_frequentes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pergunta VARCHAR(255) NOT NULL,
    resposta TEXT NOT NULL,
    ativo TINYINT(1) NOT NULL DEFAULT 1
);

CREATE TABLE tipos_sanguineos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(3) NOT NULL UNIQUE,
    descricao TEXT
);

INSERT INTO instituicoes (nome, site_oficial, telefone) VALUES
('Instituição Demonstrativa VivaSangue', 'https://exemplo.invalid', '(11) 0000-0000');

INSERT INTO locais (instituicao_id, cidade, regiao, endereco, horario, tipo_atendimento, latitude, longitude) VALUES
(1, 'Santo André', 'ABC Paulista', 'Rua Exemplo, 100', 'Seg–Sex, 08:00–16:00', 'Posto fixo', -23.6639, -46.5383),
(1, 'São Paulo', 'São Paulo', 'Av. Exemplo, 200', 'Seg–Sáb, 07:00–15:00', 'Posto fixo', -23.5505, -46.6333),
(1, 'Mauá', 'ABC Paulista', 'Av. Demonstrativa, 300', 'Ter–Sex, 08:30–14:30', 'Campanha', -23.6677, -46.4614);

INSERT INTO campanhas (instituicao_id, local_id, nome, data_campanha, horario, cidade, informacoes, status, tipo_sanguineo_solicitado) VALUES
(1,1,'Doe Vida — Exemplo','2026-10-15','08:00–13:00','Santo André','Dado fictício para demonstração do TCC.','Agendada',NULL),
(1,2,'Gota de Esperança — Exemplo','2026-10-22','09:00–15:00','São Paulo','Dado fictício para demonstração do TCC.','Agendada','O+'),
(1,3,'Viva a Vida — Exemplo','2026-10-30','08:30–12:30','Mauá','Dado fictício para demonstração do TCC.','Agendada',NULL);

INSERT INTO perguntas_frequentes (pergunta,resposta) VALUES
('Preciso agendar?','Depende da instituição e da campanha. Confirme diretamente com o local oficial.'),
('Como funciona a doação?','O processo normalmente envolve cadastro, triagem e coleta, seguindo os protocolos do serviço.'),
('Quanto tempo dura o processo?','O tempo total pode variar conforme a instituição e as condições do atendimento.'),
('O que devo levar?','A documentação exigida pode variar. Confirme com a instituição antes de comparecer.'),
('Posso doar se estiver tomando medicamento?','Informe todos os medicamentos à equipe de saúde, que avaliará a situação.');

INSERT INTO tipos_sanguineos (tipo, descricao) VALUES
('A+','Tipo sanguíneo do sistema ABO associado ao fator Rh positivo.'),
('A-','Tipo sanguíneo do sistema ABO associado ao fator Rh negativo.'),
('B+','Tipo sanguíneo do sistema ABO associado ao fator Rh positivo.'),
('B-','Tipo sanguíneo do sistema ABO associado ao fator Rh negativo.'),
('AB+','Tipo sanguíneo do sistema ABO associado ao fator Rh positivo.'),
('AB-','Tipo sanguíneo do sistema ABO associado ao fator Rh negativo.'),
('O+','Tipo sanguíneo do sistema ABO associado ao fator Rh positivo.'),
('O-','Tipo sanguíneo do sistema ABO associado ao fator Rh negativo.');

-- Gere uma senha administrativa real com password_hash() antes de inserir em produção.
-- Exemplo de criação:
-- INSERT INTO usuarios (nome,email,senha_hash,perfil)
-- VALUES ('Administrador','admin@vivasangue.local','HASH_GERADO_COM_PASSWORD_HASH','admin');
