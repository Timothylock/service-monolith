# CSC309 UofTextbook Echange MongoDB
This service runs the MongoDB instance used by the textbook exchange app

## Setup
Generate the secret
```
TMPFILE=$(mktemp)
/usr/bin/openssl rand -base64 741 > $TMPFILE
kubectl create secret generic shared-bootstrap-data --from-file=internal-auth-mongodb-keyfile=$TMPFILE
rm $TMPFILE
```

## Development
To access the database, forward port `27017`

```
kubectl port-forward csc309-mongodb-0 27017
```

You can then access it with a program like Robo 3T