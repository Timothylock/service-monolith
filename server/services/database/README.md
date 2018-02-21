# Database

This is the main database that runs on the server. Given the low number
of resources available on the server, a main database with multiple databases
will suffice.

## Local Development
There is a sample SQL file in the backfill folder that you can import into
MySQL to load with sample data for testing purposes.

## To deploy
To deploy this service, run `make deploy` in this directory.