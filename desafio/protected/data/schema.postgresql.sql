--

-- Table structure for table `Administrador`

--

CREATE TABLE IF NOT EXISTS administrador (
    id bigserial primary key,
    nivel int NOT NULL,
    nome varchar(300) NOT NULL,
    email varchar(300) NOT NULL,
    usuario varchar(300) NOT NULL,
    senha varchar(300) NOT NULL
);


--

-- Dumping data for table `Administrador`

--

INSERT INTO administrador (nivel, nome, email, usuario, senha) VALUES
(1, 'teste', 'teste', 'teste', 'teste'),
(0, 'teste 2', 'teste 2', 'teste2', 'teste 2'),
(0, 'teste 3', 'teste 3', 'teste3', 'teste 3');


--

-- Table structure for table `categorias`

--

CREATE TABLE IF NOT EXISTS categorias (
    id bigserial primary key,
    nome varchar(300) NOT NULL,
    created_at timestamp default NOW()
);

--

-- Dumping data for table `categorias`

--

INSERT INTO categorias (nome) VALUES
('categoria1'),
('categoria2'),
('categoria3');

--

-- Table structure for table `posts`

--

CREATE TABLE IF NOT EXISTS posts (
    id bigserial primary key,
    titulo varchar(300) NOT NULL,
    conteudo varchar(500) NOT NULL,
    administrador_id int NOT NULL,
    categoria_id int NOT NULL,
    created_at timestamp default NOW()
);

ALTER TABLE posts ADD CONSTRAINT post_fk FOREIGN KEY(administrador_id) REFERENCES administrador(id);
ALTER TABLE posts ADD CONSTRAINT post_categoria_fk FOREIGN KEY(categoria_id) REFERENCES categorias(id);
