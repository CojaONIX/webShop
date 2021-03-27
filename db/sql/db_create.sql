
-- -----------------------------------------------------
-- Table main_categories
-- -----------------------------------------------------
USE FAAtcWHEbY;

SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS main_categories;

CREATE TABLE IF NOT EXISTS main_categories (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(45) NULL,
  description VARCHAR(100) NULL,
  img  VARCHAR(100) NULL
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table categories
-- -----------------------------------------------------
DROP TABLE IF EXISTS categories ;

CREATE TABLE IF NOT EXISTS categories (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(45) UNIQUE NOT NULL,
  description VARCHAR(100) NULL,
  img  VARCHAR(100) NULL,
  color CHAR(6) NULL,
  main_categories_id INT UNSIGNED NOT NULL,

  FOREIGN KEY (main_categories_id) REFERENCES main_categories (id)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table products
-- -----------------------------------------------------
DROP TABLE IF EXISTS products;

CREATE TABLE IF NOT EXISTS products (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  short_description VARCHAR(300) NULL,
  long_description TEXT NULL,
  qty INT UNSIGNED NULL,
  price DECIMAL(10,2) NOT NULL,
  discount TINYINT(2) UNSIGNED NULL DEFAULT 0,
  featured TINYINT(1) NULL DEFAULT 0,
  categories_id INT UNSIGNED NOT NULL,

  FOREIGN KEY (categories_id) REFERENCES categories(id)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table admins
-- -----------------------------------------------------
DROP TABLE IF EXISTS admins ;

CREATE TABLE IF NOT EXISTS admins (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(45) NOT NULL,
  pass CHAR(32) NOT NULL
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table users
-- -----------------------------------------------------
DROP TABLE IF EXISTS users ;

CREATE TABLE IF NOT EXISTS users (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(45) NOT NULL,
  pass CHAR(32) NOT NULL,
  email VARCHAR(45) NOT NULL
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table users_data
-- -----------------------------------------------------
DROP TABLE IF EXISTS users_data ;

CREATE TABLE IF NOT EXISTS users_data (
  users_id INT UNSIGNED PRIMARY KEY NOT NULL,
  first_name VARCHAR(45) NULL,
  last_name VARCHAR(45) NULL,
  country VARCHAR(45) NULL,
  phone VARCHAR(16) NULL,
  postal_code VARCHAR(10) NULL,
  city VARCHAR(45) NULL,
  address VARCHAR(60) NULL,

  FOREIGN KEY (users_id) REFERENCES users(id)
) ENGINE = InnoDB;

 
-- -----------------------------------------------------
-- Table orders
-- -----------------------------------------------------
DROP TABLE IF EXISTS orders ;

CREATE TABLE IF NOT EXISTS orders (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  date TIMESTAMP(6) NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  status TINYINT(9) NOT NULL,
  users_data_users_id INT UNSIGNED NOT NULL,

  FOREIGN KEY (users_data_users_id) REFERENCES users_data(users_id)
) ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table orders_has_products
-- -----------------------------------------------------
DROP TABLE IF EXISTS orders_has_products ;

CREATE TABLE IF NOT EXISTS orders_has_products (
  orders_id INT UNSIGNED NOT NULL,
  products_id INT UNSIGNED NOT NULL,

  PRIMARY KEY (orders_id, products_id),
  FOREIGN KEY (orders_id) REFERENCES orders (id),
  FOREIGN KEY (products_id) REFERENCES products (id)
) ENGINE = InnoDB;

SET FOREIGN_KEY_CHECKS = 1;
