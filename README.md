# db_slow
Slow down database queries in Nextcloud for performance debugging

Adds a delay to every database query made to emulate working with slow databases.

---

Since most developers only work with fast local databases.
it's easy to add additional database queries in the code
without realizing the performance impact this can have when a user is using a slower (remote) database.

This app makes it easy to simulate working with slow databases
without having to go trough the effort of setting up an external database.

Enabling the apps adds a 10ms (configurable in `appinfo/app.php`) delay to every query made to the database
to make it noticiable when to many database queries are being made in a request.
