CREATE DATABASE users_db;
USE users_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    contact_email VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    category_id INT NOT NULL,
    supplier_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    review_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO users (name, email) VALUES 
    ('John Doe', 'john@example.com'), 
    ('Jane Smith', 'jane@example.com'), 
    ('Alice Johnson', 'alice@example.com');

INSERT INTO categories (name, description) VALUES 
    ('Elektronika', 'Urządzenia elektroniczne'), 
    ('Akcesoria', 'Dodatki do urządzeń'), 
    ('Oprogramowanie', 'Programy komputerowe');

INSERT INTO suppliers (name, contact_email) VALUES 
    ('TechCorp', 'contact@techcorp.com'), 
    ('GadgetSupplier', 'info@gadgetsupplier.com'), 
    ('SoftDist', 'sales@softdist.com');

INSERT INTO products (name, price, stock, category_id, supplier_id) VALUES 
    ('Laptop', 999.99, 10, 1, 1), 
    ('Smartphone', 499.99, 20, 1, 2), 
    ('Myszka', 29.99, 50, 2, 2), 
    ('Antywirus', 59.99, 100, 3, 3);

INSERT INTO orders (user_id, product_id, quantity) VALUES 
    (1, 1, 1), 
    (2, 2, 2), 
    (3, 3, 3);

INSERT INTO reviews (user_id, product_id, rating, comment) VALUES 
    (1, 1, 5, 'Świetny laptop, szybki i niezawodny!'), 
    (2, 2, 4, 'Smartfon OK, ale bateria mogłaby być lepsza'), 
    (3, 3, 3, 'Myszka działa, ale bez rewelacji');