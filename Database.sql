CREATE TABLE users(
    id int(100) PRIMARY KEY auto_increment not null,
    username VARCHAR(255) not null unique,
    name VARCHAR(255) not null,
    dni int(255) not null unique,
    address VARCHAR(255) not null,
    city VARCHAR(255) not null,
    phone int(255) not null
)Engine=InnoDB;

CREATE TABLE foods(
    id int(100) PRIMARY KEY auto_increment not null,
    description VARCHAR(255) not null,
    price int(100) not null,
    image VARCHAR(100) not null
)Engine=InnoDB;


CREATE TABLE reviews(
    id int(100) PRIMARY KEY auto_increment not null,
    user_id int(100) not null UNIQUE,
    stars int(5) not null,
    review MEDIUMTEXT,
    constraint fk_reviews_users FOREIGN KEY(id) REFERENCES users(id)
)Engine=InnoDB;


CREATE TABLE categories(
    id int(100) auto_increment not null PRIMARY KEY,
    name VARCHAR(255) not null
)Engine=InnoDB;

CREATE TABLE orders(
    id int(100) PRIMARY KEY auto_increment not null,
    user_id int(100) not null,
    total_price int(255) not null,
    date_order date,
    hour TIME,
    constraint fk_orders_users FOREIGN KEY(id) REFERENCES users(id)
)Engine=InnoDB;

CREATE TABLE orders_foods(
    order_id int(100) not null,
    foods_id int(100) not null,
    constraint fk_order_foods_orders FOREIGN KEY(order_id) REFERENCES orders(id),
    constraint fk_order_foods_foods FOREIGN KEY(foods_id) REFERENCES foods(id)
)Engine=InnoDB;

