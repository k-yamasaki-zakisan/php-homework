CREATE TABLE board.post (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    title VARCHAR(50),
    content TEXT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

参考サイト
https://www.dbonline.jp/mysql/table/index2.html
https://26gram.com/mysql-show-tables
https://qiita.com/sakuraya/items/0dd0bb4114e56f42556d


