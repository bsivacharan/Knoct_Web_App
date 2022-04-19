//Obj of data to send in future like a dummyDb

/*const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const connId = urlParams.get('connId');
console.log(connId)

const conndid = urlParams.get('conndid');
console.log(conndid);*/

var knoctuid = 



const data = {'"auto_issue":true,"auto_remove":true,"comment":"string","connection_id":"'+connId+'","cred_def_id":"Urp6sxLC92y1JYhFna7Vf7:3:CL:232942:default","credential_preview":{"@type":"'+conndid+';spec/issue-credential/1.0/credential-preview","attributes":[{"mime-type":"text/plain","name":"knoctuid","value":"'+knoctuid+'"},{"mime-type":"text/plain","name":"knoctuqid","value":"kontest90h"}]},"trace":true'};

console.log(data);


//POST request with body equal on data in JSON format
fetch('http://ec2-3-129-77-197.us-east-2.compute.amazonaws.com:8003/issue-credential/send-offer', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then((response) => {console.log(response.status);
response.json();
})
//Then with the data from the response in JSON...
.then((data) => {
  console.log('Success:', data);
  //document.write("Then success refiff:" + data.invitation_url);
  //var obj = JSON.parse(json);
//  connId =  data.connection_id;
})
//Then with the error genereted...
.catch((error) => {
  console.error('Error:', error);
});

