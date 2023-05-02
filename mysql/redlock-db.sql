CREATE TABLE `Users` (
    `ID` int(50) NOT NULL,
    `Nama` varchar(100) NOT NULL,
    `Alamat` varchar(300) NOT NULL,
    `Jabatan` varchar(50) NOT NULL,
    PRIMARY KEY (`ID`)
);

INSERT INTO `Users` (ID, Nama, Alamat, Jabatan)
VALUES  ('1', 'Arasaka', 'Tokyo', 'Founder'),
        ('2', 'Meduza', 'Greek', 'Photographer'),
        ('3', 'DeLaVega', 'Madrid', 'Model'),
        ('4', 'Eranova', 'Zurich', 'Digital Specialist');