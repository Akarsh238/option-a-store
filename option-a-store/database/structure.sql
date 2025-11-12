-- Database structure for Option A (relational design complete & testable)
-- Import this into MySQL (e.g., via phpMyAdmin) to satisfy the "database structure completed and tested" requirement.

CREATE DATABASE IF NOT EXISTS mystore_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mystore_db;

-- Users table
CREATE TABLE IF NOT EXISTS users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(120) NOT NULL,
  email VARCHAR(160) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  role ENUM('customer','admin') DEFAULT 'customer',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Products table
CREATE TABLE IF NOT EXISTS products (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  description TEXT,
  price DECIMAL(10,2) NOT NULL DEFAULT 0,
  image_url VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Orders table (basic structure for later phases)
CREATE TABLE IF NOT EXISTS orders (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT UNSIGNED NOT NULL,
  total DECIMAL(10,2) NOT NULL DEFAULT 0,
  status ENUM('pending','paid','shipped','cancelled') DEFAULT 'pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT fk_orders_user FOREIGN KEY (user_id) REFERENCES users(id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

-- Optional: seed a few products to test SELECTs (can be removed)
INSERT INTO products (name, description, price, image_url) VALUES
  ('Sample Tee', 'A comfy t-shirt.', 19.99, 'https://placehold.co/600x400/png'),
  ('Retro Mug', 'Ceramic mug with retro vibes.', 12.50, 'https://placehold.co/600x400/png'),
  ('Sticker Pack', 'A pack of assorted stickers.', 6.00, 'https://placehold.co/600x400/png');
