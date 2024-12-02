export VERSION=1.0.0

echo "Update node_name to node for each deployment"
sed 's/node_name/s1/g' deploy.yaml > wordpress-s1.yaml
sed 's/node_name/s2/g' deploy.yaml > wordpress-s2.yaml
sed 's/node_name/s3/g' deploy.yaml > wordpress-s3.yaml

echo "Replace env" 
envsubst < wordpress-s1.yaml | kubectl apply -f -
envsubst < wordpress-s2.yaml | kubectl apply -f -
envsubst < wordpress-s3.yaml | kubectl apply -f -
