//Obj of data to send in future like a dummyDb
const data = {};
var jsonstr;

//POST request with body equal on data in JSON format
fetch(
  "http://ec2-3-129-77-197.us-east-2.compute.amazonaws.com:8003/connections/create-invitation?auto_accept=true",
  {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(data)
  }
)
  .then(response => {
	  document.write(response.json().connection_id); 
	  
  } )
  .catch((error) => {
  console.error('Error:', error);
});
  