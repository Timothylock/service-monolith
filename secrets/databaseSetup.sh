if [ $# -eq 0 ]
  then
    echo "No arguments supplied \n ./databaseSetup.sh PASSWORD"
fi

kubectl create secret generic mysql-pass --from-literal=password=$1