

-- Create the categories table 
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
-- Create the products table
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    image_url VARCHAR(255),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
-- data for the categories table
INSERT INTO categories (name) VALUES ('Tilbehør');
INSERT INTO categories (name) VALUES ('Diverse');

-- Inserting a "Tilbehør" product
INSERT INTO products (name, description, price, image_url, category_id) VALUES ('Karton og kardus', 'Patchwork kardus 2 i en (tryk på begge sider) 1 cm x 1 cm og sekskanter 35 mm x 35 mm', 100.00, 'https://www.patchworkkaelderen.dk/____impro/1/onewebmedia/karton.jpg', 1);
-- Inserting a "Diverse" product
INSERT INTO products (name, description, price, image_url, category_id) VALUES ('Item Name 1', 'Description of item 1.', 50.00, 'https://placehold.co/300x200', 2);
