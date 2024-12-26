CREATE DATABASE formtst;

USE formtst;

CREATE TABLE regist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    nomormahasiswa BIGINT NOT NULL,
    email VARCHAR(50) NOT NULL,
    number BIGINT NOT NULL,
    smester VARCHAR(20) NOT NULL,
    cerita VARCHAR(100)
);
