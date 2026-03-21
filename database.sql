CREATE DATABASE IF NOT EXISTS symphony;
USE symphony;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS instruments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    family VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample instrument data if table is empty
INSERT IGNORE INTO instruments (id, name, family, description, image_url) VALUES 
(1, 'The Stradivarius Violin', 'STRINGS', 'Celebrated for its unparalleled tonal quality, the Stradivarius remains the gold standard for violinists worldwide.', 'images/violin.png'),
(2, 'The Concert Flute', 'WOODWINDS', 'A masterpiece of acoustic precision, the modern silver flute offers a brilliant, agile voice for soloists.', 'images/silver flute.jpg'),
(3, 'The Bb Trumpet', 'BRASS', 'The most popular member of the brass family, known for its bright, penetrating tone in jazz and classical music.', 'images/trumpet.jpg'),
(4, 'The Soloist Cello', 'STRINGS', 'Capable of profound emotional depth, the cello''s range most closely resembles the human tenor voice.', 'images/cello.webp');
