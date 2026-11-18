CREATE TABLE seminars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    title VARCHAR(200) NOT NULL,
    speaker VARCHAR(100) NOT NULL,
    starts_at DATETIME NOT NULL,
    location VARCHAR(200) NOT NULL,
    abstract TEXT
);

INSERT INTO seminars (type, title, speaker, starts_at, location, abstract) VALUES
('Oberseminar', 'Example Talk on Random Walks', 'Dr. Anna Example', '2026-12-10 16:15:00', 'TU Darmstadt, S2|15 Room 201', 'Short example abstract.'),
('Workshop', 'Example Workshop on Statistics', 'Prof. Max Example', '2026-12-17 10:00:00', 'Goethe University Frankfurt', 'Short example abstract.'),
('Rhein-Main-Colloquium', 'Past Example Talk', 'Dr. Eva Example', '2026-10-15 16:00:00', 'JGU Mainz', 'Short example abstract.');