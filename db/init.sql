CREATE TABLE seminars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL,
    title VARCHAR(200) NOT NULL,
    speaker VARCHAR(100) NOT NULL,
    starts_at DATETIME NOT NULL,
    location VARCHAR(200) NOT NULL,
    abstract TEXT,
    hidden TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE people (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    former TINYINT(1) NOT NULL DEFAULT 0
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
) DEFAULT CHARSET=utf8mb4;

INSERT INTO seminars (type, title, speaker, starts_at, location, abstract, hidden) VALUES
('Oberseminar', 'Example Talk on Random Walks', 'Dr. Anna Example', '2026-12-10 16:15:00', 'TU Darmstadt, S2|15 Room 201', 'Short example abstract.', 0),
('Workshop', 'Example Workshop on Statistics', 'Prof. Max Example', '2026-12-17 10:00:00', 'Goethe University Frankfurt', 'Short example abstract.', 0),
('Rhein-Main-Colloquium', 'Past Example Talk', 'Dr. Eva Example', '2026-10-15 16:00:00', 'JGU Mainz', 'Short example abstract.', 0),
('Oberseminar', 'Example Talk on Markov Chains', 'Dr. Tom Example', '2027-01-14 16:15:00', 'TU Darmstadt, S2|15 Room 201', 'Short example abstract.', 0),
('Rhein-Main-Colloquium', 'Example Colloquium on Probability', 'Prof. Lena Example', '2027-01-28 16:00:00', 'JGU Mainz', 'Short example abstract.', 0),
('Workshop', 'Example Workshop on Time Series', 'Dr. Jan Example', '2027-02-11 09:30:00', 'Goethe University Frankfurt', 'Short example abstract.', 0),
('Oberseminar', 'Past Example Talk on Statistics', 'Prof. Paul Example', '2026-11-05 16:15:00', 'TU Darmstadt, S2|15 Room 201', 'Short example abstract.', 0),
('Workshop', 'Past Example Workshop', 'Dr. Mia Example', '2026-09-24 10:00:00', 'JGU Mainz', 'Short example abstract.', 0),
('Rhein-Main-Colloquium', 'Past Example Colloquium', 'Prof. Leo Example', '2026-11-12 16:00:00', 'Goethe University Frankfurt', 'Short example abstract.', 0),
('Oberseminar', 'Hidden Example Talk', 'Dr. Hidden Example', '2026-12-03 16:15:00', 'TU Darmstadt, S2|15 Room 201', 'This seminar is hidden on purpose.', 1);

INSERT INTO people (name, location, former) VALUES
('Dr. Anna Example', 'Darmstadt', 0),
('Prof. Max Example', 'Frankfurt', 0),
('Dr. Eva Example', 'Mainz', 0),
('Prof. Old Example', 'Darmstadt', 1);

-- Example account for testing the login only. Password: example-password
INSERT INTO users (username, password_hash) VALUES
('secretary', '$2y$10$4tUZx4dEzeZlhe.Acqo3eeXKGpNNl3fCipSiVBWW6B4cTtb4Ccj5S');