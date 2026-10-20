USE praktikum_web_2401020134;

INSERT INTO program_studi (nama_prodi) VALUES
('Teknik Komputer'),
('Sistem Informasi');

INSERT INTO mahasiswa (nim, nama, email, usia, program_studi_id) VALUES
('2401020134', 'Riki Saputra', 'riki@example.com', 20, 1),
('2401020135', 'Budi Santoso', 'budi@example.com', 19, 1),
('2401020136', 'Siti Aminah', 'siti@example.com', 21, 2),
('2401020999', 'Data Temp', 'temp@example.com', 18, 2);

UPDATE mahasiswa 
SET email = 'riki.saputra@example.com' 
WHERE nim = '2401020134';

DELETE FROM mahasiswa 
WHERE nim = '2401020999';

SELECT m.nim, m.nama, m.email, m.usia, p.nama_prodi 
FROM mahasiswa AS m 
JOIN program_studi AS p ON p.id = m.program_studi_id 
ORDER BY m.nim;