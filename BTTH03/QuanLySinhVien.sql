create database QuanLySinhVien;
use QuanLySinhVien;

create table Lop(
	id int unsigned auto_increment primary key not null,
	tenLop varchar(255) not null
);

CREATE TABLE SinhVien (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    TenSinhVien VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    ngaysinh DATE NOT NULL,
    idLop INT UNSIGNED,
    FOREIGN KEY (idLop) REFERENCES Lop(id)
);
insert into Lop (id, tenLop) values (1, 'Jervis');
insert into Lop (id, tenLop) values (2, 'Barbee');
insert into Lop (id, tenLop) values (3, 'Winni');
insert into Lop (id, tenLop) values (4, 'Hewe');
insert into Lop (id, tenLop) values (5, 'Elianora');
insert into Lop (id, tenLop) values (6, 'Minette');
insert into Lop (id, tenLop) values (7, 'Maddi');
insert into Lop (id, tenLop) values (8, 'Gilda');
insert into Lop (id, tenLop) values (9, 'Brad');
insert into Lop (id, tenLop) values (10, 'Leonard');
insert into Lop (id, tenLop) values (11, 'Hanni');
insert into Lop (id, tenLop) values (12, 'Ferdy');
insert into Lop (id, tenLop) values (13, 'Devlen');
insert into Lop (id, tenLop) values (14, 'Andie');
insert into Lop (id, tenLop) values (15, 'Carrol');
insert into Lop (id, tenLop) values (16, 'Salli');
insert into Lop (id, tenLop) values (17, 'Tierney');
insert into Lop (id, tenLop) values (18, 'Burk');
insert into Lop (id, tenLop) values (19, 'Alic');
insert into Lop (id, tenLop) values (20, 'Alanson');
insert into Lop (id, tenLop) values (21, 'Philis');
insert into Lop (id, tenLop) values (22, 'Arabella');
insert into Lop (id, tenLop) values (23, 'Delmer');
insert into Lop (id, tenLop) values (24, 'Pasquale');
insert into Lop (id, tenLop) values (25, 'Gannon');
insert into Lop (id, tenLop) values (26, 'Koralle');
insert into Lop (id, tenLop) values (27, 'Cirstoforo');
insert into Lop (id, tenLop) values (28, 'Bibbye');
insert into Lop (id, tenLop) values (29, 'Neal');
insert into Lop (id, tenLop) values (30, 'Leicester');
insert into Lop (id, tenLop) values (31, 'Carlie');
insert into Lop (id, tenLop) values (32, 'Wilone');
insert into Lop (id, tenLop) values (33, 'Nanny');
insert into Lop (id, tenLop) values (34, 'Hadlee');
insert into Lop (id, tenLop) values (35, 'Pattin');
insert into Lop (id, tenLop) values (36, 'Elsey');
insert into Lop (id, tenLop) values (37, 'Teddy');
insert into Lop (id, tenLop) values (38, 'Marleen');
insert into Lop (id, tenLop) values (39, 'Thibaud');
insert into Lop (id, tenLop) values (40, 'Dido');
insert into Lop (id, tenLop) values (41, 'Janean');
insert into Lop (id, tenLop) values (42, 'Alister');
insert into Lop (id, tenLop) values (43, 'Inesita');
insert into Lop (id, tenLop) values (44, 'Lorelle');
insert into Lop (id, tenLop) values (45, 'Kassey');
insert into Lop (id, tenLop) values (46, 'Karalynn');
insert into Lop (id, tenLop) values (47, 'Loria');
insert into Lop (id, tenLop) values (48, 'Adora');
insert into Lop (id, tenLop) values (49, 'Evelyn');
insert into Lop (id, tenLop) values (50, 'Lettie');

insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (1, 'Corina', 'cfillingham0@barnesandnoble.com', '2022-10-08', 1);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (2, 'Grier', 'gpoulney1@google.com.hk', '2023-04-07', 2);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (3, 'Barbara', 'bastill2@seesaa.net', '2023-02-20', 3);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (4, 'Eberto', 'ecassin3@wsj.com', '2023-04-09', 4);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (5, 'Sherye', 'sadame4@phoca.cz', '2023-01-11', 5);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (6, 'Delaney', 'dkemmett5@webnode.com', '2023-04-17', 6);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (7, 'Katti', 'kmcneilley6@cdc.gov', '2023-07-22', 7);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (8, 'Jonathon', 'jpett7@go.com', '2023-05-23', 8);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (9, 'Gennifer', 'gblazejewski8@globo.com', '2022-11-01', 9);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (10, 'Sherwynd', 'sesser9@g.co', '2023-01-09', 10);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (11, 'Morse', 'mhendriksena@de.vu', '2023-09-25', 11);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (12, 'Jackie', 'jphillottb@businessweek.com', '2023-02-22', 12);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (13, 'Dexter', 'dklossekc@tiny.cc', '2023-03-30', 13);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (14, 'Wilden', 'wolphertd@springer.com', '2023-06-15', 14);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (15, 'Calv', 'colliffee@usa.gov', '2022-11-30', 15);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (16, 'Emmeline', 'edelberguef@list-manage.com', '2023-01-19', 16);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (17, 'Glynn', 'gmaccaghang@51.la', '2023-05-22', 17);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (18, 'Davita', 'dfilmerh@npr.org', '2023-08-30', 18);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (19, 'Marina', 'mschankelborgi@simplemachines.org', '2022-11-27', 19);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (20, 'Derick', 'doliverasj@yolasite.com', '2023-02-05', 20);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (21, 'Cyril', 'ckleynermansk@senate.gov', '2023-09-13', 21);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (22, 'Janis', 'jbenoistl@stanford.edu', '2022-10-10', 22);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (23, 'Wang', 'wglackenm@drupal.org', '2022-10-14', 23);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (24, 'Drusy', 'druppeln@imageshack.us', '2023-06-19', 24);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (25, 'Madelon', 'mdarrigrando@bizjournals.com', '2022-10-08', 25);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (26, 'Laraine', 'lhazardp@pinterest.com', '2023-03-28', 26);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (27, 'Leandra', 'lblaksleyq@baidu.com', '2023-07-06', 27);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (28, 'Ilse', 'imelmarr@homestead.com', '2023-03-05', 28);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (29, 'Vincenty', 'vshapcotts@is.gd', '2023-05-22', 29);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (30, 'Jonas', 'jambrogionit@mlb.com', '2023-07-05', 30);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (31, 'Rogerio', 'rpharoahu@cnbc.com', '2022-10-12', 31);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (32, 'Krissie', 'kschwandnerv@japanpost.jp', '2023-02-14', 32);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (33, 'Ree', 'rohanlonw@webs.com', '2023-07-30', 33);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (34, 'Coletta', 'cspradbrowx@flickr.com', '2023-05-18', 34);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (35, 'Orsa', 'olantuffey@salon.com', '2023-01-28', 35);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (36, 'Marie-jeanne', 'mthurbyz@soup.io', '2022-10-14', 36);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (37, 'Ezequiel', 'eparke10@google.com.au', '2023-06-23', 37);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (38, 'Dyan', 'dgregol11@google.co.jp', '2023-08-07', 38);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (39, 'Lane', 'lakid12@google.com.hk', '2023-08-21', 39);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (40, 'Hanan', 'hchilders13@topsy.com', '2023-04-21', 40);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (41, 'Bab', 'bbolduc14@ftc.gov', '2022-11-07', 41);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (42, 'Petr', 'psheward15@i2i.jp', '2023-08-17', 42);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (43, 'Jessamine', 'jbonus16@adobe.com', '2023-06-26', 43);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (44, 'Celle', 'cedwardes17@drupal.org', '2022-10-21', 44);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (45, 'Lezlie', 'lscammonden18@bloomberg.com', '2022-12-19', 45);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (46, 'Frances', 'fcansdale19@instagram.com', '2023-04-14', 46);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (47, 'Analise', 'aceeley1a@weibo.com', '2023-08-09', 47);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (48, 'Wiley', 'whalsho1b@nytimes.com', '2023-02-28', 48);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (49, 'Ofella', 'olamball1c@auda.org.au', '2023-06-29', 49);
insert into SinhVien (id, TenSinhVien, email, ngaysinh, idLop) values (50, 'Val', 'vreyne1d@arstechnica.com', '2022-12-08', 50);