//Obj of data to send in future like a dummyDb
const data = {};
var connId = '';
var connDid = '';

//POST request with body equal on data in JSON format
fetch('http://ec2-3-129-77-197.us-east-2.compute.amazonaws.com:8003/connections/create-invitation?auto_accept=true', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then((response) => response.json())
//Then with the data from the response in JSON...
.then((data) => {
  console.log('Success:', data);
  //document.write("Then success refiff:" + data.invitation_url);
  //var obj = JSON.parse(json);
  document.getElementById('image').src = 'https://chart.googleapis.com/chart?cht=qr&chl='+data.invitation_url+'&chs=160x160&chld=L|0';
  connId =  data.connection_id;
  connDid = data.invitation["@type"].split(';')[0];
  //connDid = data['@type'];
  
  console.log('Success:', connId + "----" + connDid);
  document.getElementById('connid').value = connId; 
  document.getElementById('conndid').value = connDid;
})
//Then with the error genereted...
.catch((error) => {
  console.error('Error:', error);
});



function iterateDots(){
    var el = document.getElementById("dots");
    var dotsStr = el.innerHTML;
    var dotsLen = dotsStr.length;

    var maxDots = 3;
    el.innerHTML = (dotsLen < maxDots ? dotsStr + '.' : '');
}


//const element = document.getElementById("demo");

//document.getElementById("dots").innerHTML = "http://ec2-18-119-47-241.us-east-2.compute.amazonaws.com/knoctdem/issuecreds.php?connId="+connId+"&conndid="+connDid;

setInterval(function() {
	fetch('http://ec2-3-129-77-197.us-east-2.compute.amazonaws.com:8003/connections/'+connId)
		.then((response) => { console.log(response.status); // 200
			return response.json();
			 })
		//Then with the data from the response in JSON...
		.then((data) => {
			if (data.rfc23_state === 'completed'){
				//window.location.href = "http://ec2-18-119-47-241.us-east-2.compute.amazonaws.com/knoctdem/issuecreds.php?connId="+connId+"&conndid="+connDid;
					document.getElementById('creds').submit();
			}
			else{
			console.log('Success:', connId + connDid);
			
			}
			//console.log('Success:', data)
		})
		//Then with the error genereted...
		.catch((error) => {
			console.error('Error:', error);
		});
}, 1000 * 7);