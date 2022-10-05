# CodeIgniter 3 on Docker

This is a simple Docker image for CodeIgniter 3. It is based on the official PHP image and includes the latest version of CodeIgniter 3.

## How to run

Clone this repository and run the following command:

```bash
docker-compose up -d
```

## Container 

- **PHPMyAdmin** is available at `http://localhost:8080`
- **CodeIgniter** is available at `http://localhost:7700`
- **MySQL** is available at port `3310`


## SQL Query Example Data

The following SQL query can be used to create the example data:

```sql
create table users (
	id INT,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	email VARCHAR(50),
	gender VARCHAR(50)
);
insert into users (id, first_name, last_name, email, gender) values (1, 'Salvidor', 'Zorzenoni', 'szorzenoni0@etsy.com', 'Male');
insert into users (id, first_name, last_name, email, gender) values (2, 'Verna', 'Marciek', 'vmarciek1@independent.co.uk', 'Female');
insert into users (id, first_name, last_name, email, gender) values (3, 'Belinda', 'Ablott', 'bablott2@nifty.com', 'Female');
insert into users (id, first_name, last_name, email, gender) values (4, 'Rudd', 'Powlett', 'rpowlett3@abc.net.au', 'Male');
insert into users (id, first_name, last_name, email, gender) values (5, 'Gwenneth', 'Rainbird', 'grainbird4@google.com.br', 'Female');
insert into users (id, first_name, last_name, email, gender) values (6, 'Clarine', 'Whistance', 'cwhistance5@blog.com', 'Female');
insert into users (id, first_name, last_name, email, gender) values (7, 'Hakim', 'Rogans', 'hrogans6@illinois.edu', 'Male');
insert into users (id, first_name, last_name, email, gender) values (8, 'Colman', 'Longstreet', 'clongstreet7@slideshare.net', 'Male');
insert into users (id, first_name, last_name, email, gender) values (9, 'Padraig', 'Utting', 'putting8@phoca.cz', 'Male');
insert into users (id, first_name, last_name, email, gender) values (10, 'Arny', 'Huggon', 'ahuggon9@samsung.com', 'Male');
```
