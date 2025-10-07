CREATE DATABASE IF NOT EXISTS payment_db;
USE payment_db;

CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    payment_id VARCHAR(255) NOT NULL,
    status VARCHAR(50),
    date DATETIME
);
