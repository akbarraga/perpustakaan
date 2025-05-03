CREATE DATABASE perpustakaan;
USE perpustakaan;

CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    kategori VARCHAR(50)
);

INSERT INTO buku (judul, kategori) VALUES
('Web Design', 'Desain'),
('Pemrograman PHP', 'Pemrograman'),
('Manajemen Database', 'Database');
