DROP TABLE IF EXISTS users;
CREATE TABLE users (
  firstName VARCHAR(50) NOT NULL,
  lastName VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  phoneNumber INT(11),
  birthday date,
  password VARCHAR(255) NOT NULL,
  confirmPassword VARCHAR(255) NOT NULL,
  user-id INT(32) NOT NULL AUTO-INCREMENT,
  PRIMARY KEY (user_id)
)
