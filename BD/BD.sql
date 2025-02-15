CREATE DATABASE aplicacao;

USE aplicacao;

CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT,
    cpf CHAR(11) NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(255),
    genero VARCHAR(255),
    cep VARCHAR(9),
    sigla_estado CHAR(2),
    cidade VARCHAR(255),
    pais VARCHAR(255),
    rua VARCHAR(255),
    numero VARCHAR(255),
    bairro VARCHAR(255),
    complemento VARCHAR(255),
    PRIMARY KEY (id_cliente)
);

INSERT INTO cliente (nome, telefone, email, cep, sigla_estado, cidade, pais, rua, numero, bairro, complemento)
VALUES 
    ('Lucas Silva', '61998887766', 'lucas.silva@mail.com', '72000000', 'DF', 'Brasília', 'Brasil', 'Rua 10', '25', 'Asa Norte', 'Perto da escola'),
    ('Maria Oliveira', '61997778899', 'maria.oliveira@mail.com', '71000000', 'DF', 'Brasília', 'Brasil', 'Avenida 7', '30', 'Asa Sul', 'Em frente ao mercado');

SELECT * FROM cliente;

CREATE TABLE bicicletas (
    id_bicicletas INT AUTO_INCREMENT,
    id_cliente INT,
    marca VARCHAR(255),
    modelo VARCHAR(255),
    marcha VARCHAR(255),
    aro VARCHAR(255),
    freio VARCHAR(255),
    cor VARCHAR(255),
    numero_de_serie VARCHAR(255),
    quadro VARCHAR(255),
    garfo VARCHAR(255),
    pedivela VARCHAR(255),
    pedal VARCHAR(255),
    raio VARCHAR(255),
    niple VARCHAR(255),
    guidao VARCHAR(255),
    camara_de_ar VARCHAR(255),
    garfo_suspensao VARCHAR(255),
    bicicleta_adulto BOOLEAN,
    descricao VARCHAR(255),
    PRIMARY KEY (id_bicicletas),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

INSERT INTO bicicletas (id_cliente, marca, modelo, marcha, aro, freio, cor, numero_de_serie, quadro, garfo, pedivela, pedal, raio, niple, guidao, camara_de_ar, garfo_suspensao, bicicleta_adulto, descricao)
VALUES 
    (1, 'Caloi', 'Elite', '21', '29', 'Disco', 'Preta', 'ABC123456789', 'Alumínio', 'Rock Shox', 'Shimano', 'Pedal de alumínio', '700', 'Niple de aço', 'Pro Taper', 'Bicicleta 29', true, 'Ideal para trilhas de alto impacto'),
    (2, 'Oggi', 'Hawk', '18', '26', 'V-Brake', 'Azul', 'XYZ987654321', 'Aço', 'Rav X', 'Sram', 'Pedal de plástico', '600', 'Niple de alumínio', 'Oggi Tech', 'Câmara de ar 26', false, 'Bicicleta urbana');

SELECT * FROM bicicletas;

CREATE TABLE empresa (
    id_empresa INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    CNPJ VARCHAR(14) NOT NULL UNIQUE,
    numero VARCHAR(10),
    email VARCHAR(255),
    cep VARCHAR(9),
    sigla_estado CHAR(2),
    cidade VARCHAR(255),
    pais VARCHAR(255),
    rua VARCHAR(255),
    numero_endereco VARCHAR(255),
    bairro VARCHAR(255),
    complemento VARCHAR(255),
    PRIMARY KEY (id_empresa)
);

INSERT INTO empresa (nome, CNPJ, numero, email, cep, sigla_estado, cidade, pais, rua, numero_endereco, bairro, complemento)
VALUES 
    ('Loja Bicicross', '12345678000195', '123', 'contato@lojabicicross.com.br', '70000000', 'DF', 'Brasília', 'Brasil', 'Rua do Comércio', '200', 'Setor Comercial', 'Perto da estação');

SELECT * FROM empresa;

CREATE TABLE funcionario (
    id_funcionario INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL UNIQUE,
    email VARCHAR(255),
    telefone VARCHAR(20),
    cep VARCHAR(9),
    sigla_estado CHAR(2),
    cidade VARCHAR(255),
    pais VARCHAR(255),
    rua VARCHAR(255),
    numero VARCHAR(255),
    bairro VARCHAR(255),
    complemento VARCHAR(255),
    funcao VARCHAR(255) NOT NULL,
    status VARCHAR(255),
    data_entrada DATE NOT NULL,
    data_saida DATE,
    PRIMARY KEY (id_funcionario),
    FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa)
);

INSERT INTO funcionario (nome, cpf, email, telefone, cep, sigla_estado, cidade, pais, rua, numero, bairro, complemento, funcao, status, data_entrada)
VALUES 
    ('Carlos Almeida', '12345678901', 'carlos.almeida@lojabicicross.com.br', '61988887777', '70000000', 'DF', 'Brasília', 'Brasil', 'Rua das Flores', '10', 'Asa Norte', 'Ao lado do café', 'Vendedor', 'Ativo', '2025-01-01'),
    ('Patrícia Souza', '98765432100', 'patricia.souza@lojabicicross.com.br', '61997776666', '71000000', 'DF', 'Brasília', 'Brasil', 'Avenida Central', '50', 'Setor Central', 'Em frente à praça', 'Atendente', 'Ativo', '2025-02-01');

SELECT * FROM funcionario;

CREATE TABLE servicos (
    id_servicos INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL UNIQUE,
    descricao VARCHAR(255),
    preco DECIMAL(10,2) NOT NULL,
    duracao INT NOT NULL,
    PRIMARY KEY (id_servicos)
);

INSERT INTO servicos (nome, descricao, preco, duracao)
VALUES 
    ('Manutenção Básica', 'Revisão geral de funcionamento da bicicleta', 100.00, 60),
    ('Pintura Personalizada', 'Pintura customizada para bicicletas', 200.00, 120);

SELECT * FROM servicos;

CREATE TABLE autenticacao (
    id_auth INT AUTO_INCREMENT,
    login VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(512) NOT NULL,
    PRIMARY KEY (id_auth),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

INSERT INTO autenticacao (login, senha)
VALUES 
    ('lucas.silva@mail.com', MD5('12345')),
    ('maria.oliveira@mail.com', MD5('67890'));

SELECT * FROM autenticacao;

CREATE TABLE agendamento (
    id_agendamento INT AUTO_INCREMENT,
    id_cliente INT,
    id_servico INT,
    id_funcionario INT,
    id_bicicleta INT,
    dia_agendamento DATE NOT NULL,
    horario_agendamento INT,
    data_criacao DATETIME NOT NULL,
    data_alteracao DATETIME,
    status_agendamento VARCHAR(30),
    PRIMARY KEY (id_agendamento),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_servico) REFERENCES servicos(id_servicos),
    FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario),
    FOREIGN KEY (id_bicicleta) REFERENCES bicicletas(id_bicicletas),
    CHECK (horario_agendamento >= 8 AND horario_agendamento <= 17)
);

INSERT INTO agendamento (id_cliente, id_servico, id_funcionario, id_bicicleta, dia_agendamento, horario_agendamento, data_criacao, data_alteracao, status_agendamento)
VALUES 
    (1, 1, 1, 1, '2025-02-15', 9, NOW(), NULL, 'Agendado'),
    (2, 2, 2, 2, '2025-02-16', 14, NOW(), NULL, 'Agendado');

SELECT * FROM agendamento;