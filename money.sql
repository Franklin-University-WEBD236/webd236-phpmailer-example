PRAGMA foreign_keys=OFF;

BEGIN TRANSACTION;
DROP TABLE `transactions`;
CREATE TABLE `transactions`
(
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  amount REAL NOT NULL,
  date DATETIME NOT NULL,
  subject TEXT NOT NULL,
  message TEXT, 
  sender TEXT NOT NULL, 
  receiver TEXT NOT NULL
);

INSERT INTO "transactions" VALUES(1,112.25, '2019-09-09 14:01:00 EDT', 'Dinner', 'Thanks for dinner!', 'todd.whittaker@franklin.edu', 'tyler.whitney@franklin.edu');
INSERT INTO "transactions" VALUES(2,-50.75, '2019-09-10 16:12:00 EDT', 'Lunch', 'Thanks for lunch, see you soon.', 'tyler.whitney@franklin.edu', 'todd.whittaker@franklin.edu');
INSERT INTO "transactions" VALUES(3,-12.45, '2019-09-11 18:02:00 EDT', 'Coffee', 'You were right, great coffee place.', 'tyler.whitney@franklin.edu', 'todd.whittaker@franklin.edu');

DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('transactions',3);
COMMIT;