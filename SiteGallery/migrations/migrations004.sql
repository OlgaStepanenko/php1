CREATE TABLE users_login
(
  id             INT(11)      NOT NULL AUTO_INCREMENT,
  email          VARCHAR(255) NOT NULL,
  password_hash  VARCHAR(255) NULL,
  token          VARCHAR(255) NULL,
  last_action_at DATETIME     NULL,
  PRIMARY KEY (id),
  INDEX email (email)
); 