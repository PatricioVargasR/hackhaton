-- --- Users module tables ---

DROP TABLE IF EXISTS users;
CREATE TABLE users(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(150) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    username TEXT(32) NOT NULL,
    passwd TEXT(32) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    propietario_tarjeta VARCHAR(150),
    numero_cuenta VARCHAR(16),
    fecha_caducidad DATE NOT NULL,
    cvv INTEGER(3)
)ENGINE=INNODB;



-- --- Admins module tables ---


DROP TABLE IF EXISTS admins;
CREATE TABLE admins(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(150) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    username TEXT(32) NOT NULL,
    passwd TEXT(32) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    propietario_tarjeta VARCHAR(150),
    numero_cuenta VARCHAR(16),
    fecha_caducidad DATE NOT NULL,
    cvv INTEGER(3) NOT NULL
)ENGINE=INNODB;


-- --- Productos module tables ---


DROP TABLE IF EXISTS productos;
CREATE TABLE productos(
    id_productos INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_producto VARCHAR(150) NOT NULL,
    categoria VARCHAR(150) NOT NULL,
    precio_unitario FLOAT NOT NULL,
    sku VARCHAR(10) NOT NULL,
    imagen VARCHAR(250) NOT NULL,
    descripcion VARCHAR(150) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    stock INTEGER(40) NOT NULL
)ENGINE=INNODB;


-- --- Carrito module tables ---


DROP TABLE IF EXISTS carrito;
CREATE TABLE carrito(
    id_carrito INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_productos INT NOT NULL,
    cantidad INTEGER (150) NOT NULL,
    nombre_producto VARCHAR(150) NOT NULL,
    precio_unitario FLOAT NOT NULL,
    imagen VARCHAR(250) NOT NULL
)ENGINE=INNODB;

ALTER TABLE carrito ADD FOREIGN KEY (id_productos) REFERENCES productos (id_productos);
-- --- Compras module tables ---


DROP TABLE IF EXISTS compras;
CREATE TABLE compras(
    id_fecha_compra INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_productos INT NOT NULL,
    fecha_compra DATE NOT NULL,
    fecha_entrega DATE NOT NULL,
    nombre_producto VARCHAR(150) NOT NULL
)ENGINE=INNODB;

ALTER TABLE compras ADD FOREIGN KEY (id_productos) REFERENCES productos (id_productos);

-- --- Insert data into tables ---


-- --- admins --- 
INSERT INTO admins(first_name, last_name, username, passwd, correo, propietario_tarjeta, numero_cuenta, fecha_caducidad, cvv) VALUES 
    ("admin", "admin", "admin", "123", "admin@email.com", "admin", "1234567", "2025-01-01", "222");


-- --- users ---
INSERT INTO users(first_name, last_name, username, passwd, correo, propietario_tarjeta, numero_cuenta, fecha_caducidad, cvv) VALUES 
    ("ana", "itzel", "ana", "ana1234", "ana@email.com", "ana itzel", "4545423232", "2025-01-01", "333");