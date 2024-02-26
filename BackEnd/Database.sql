

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

CREATE TABLE Kurser (       
    KursusID INT AUTO_INCREMENT PRIMARY KEY,
    KursusNavn VARCHAR(255) NOT NULL,
    Beskrivelse TEXT,
    StartDato DATE,
    SlutDato DATE,
    MaxDeltagere INT,
    LedigePladser INT DEFAULT MaxDeltagere
);
-- data for the Kurser table
INSERT INTO Kurser (KursusNavn, Beskrivelse, StartDato, SlutDato, MaxDeltagere) VALUES ('Kursus 1', 'Beskrivelse af kursus 1.', '2021-01-01', '2021-01-02', 10);
INSERT INTO Kurser (KursusNavn, Beskrivelse, StartDato, SlutDato, MaxDeltagere) VALUES ('Kursus 2', 'Beskrivelse af kursus 2.', '2021-01-03', '2021-01-04', 15);

CREATE TABLE Tilmeldinger (
    TilmeldingID INT AUTO_INCREMENT PRIMARY KEY,
    KursusID INT,
    DeltagerNavn VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Telefon VARCHAR(20),
    BekræftelsesKode VARCHAR(100),
    Bekræftet BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (KursusID) REFERENCES Kurser(KursusID)
);
-- data for the Tilmeldinger table
INSERT INTO Tilmeldinger (KursusID, DeltagerNavn, Email, Telefon, BekræftelsesKode, Bekræftet) VALUES (1, 'John Doe', 'johndoe@example.com', '1234567890', 'ABC123', TRUE);
INSERT INTO Tilmeldinger (KursusID, DeltagerNavn, Email, Telefon, BekræftelsesKode, Bekræftet) VALUES (2, 'Jane Smith', 'janesmith@example.com', '9876543210', 'XYZ789', FALSE);
