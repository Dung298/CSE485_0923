use  BTTH01_CSE485;
select * from baiviet where ma_tloai = '1';

SELECT * FROM baiviet WHERE ma_tgia = 1;

SELECT * FROM theloai WHERE ma_tloai NOT IN (SELECT DISTINCT ma_tloai FROM baiviet);

SELECT b.ma_bviet, b.tieude, b.ten_bhat, tg.ten_tgia, tl.ten_tloai, b.ngayviet
FROM baiviet b
INNER JOIN tagia tg ON b.ma_tgia = tg.ma_tgia
INNER JOIN theloai tl ON b.ma_tloai = tl.ma_tloai;

SELECT tl.ten_tloai, COUNT(b.ma_bviet) AS so_bai_viet
FROM theloai tl
LEFT JOIN baiviet b ON tl.ma_tloai = b.ma_tloai
GROUP BY tl.ten_tloai
ORDER BY so_bai_viet DESC
LIMIT 1;

SELECT tg.ten_tgia, COUNT(b.ma_bviet) AS so_bai_viet
FROM tagia tg
LEFT JOIN baiviet b ON tg.ma_tgia = b.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY so_bai_viet DESC
LIMIT 2;

SELECT * FROM baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

SELECT * FROM baiviet WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' OR ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%';

