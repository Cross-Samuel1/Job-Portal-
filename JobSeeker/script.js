//Generate random room name if needed
if (!ocation hash) {
  location.hash = Math.floor(Math.random() * 0xFFFFFF).toString(16);
}
const roomHash = location.hash.substring(1);

//TODO: Replace with your own cahnnel ID
const drone = new ScaleDrone('2xmbUiTsqTzukyf7');
//Room name needs to be prefixed with observable
const roomName = 'observable-' + roomHash;
const configuration = {
  iceServers: [{
    urls;'stun.l.google.com:19302'
  }]
};
let room;
let pc;

function onSuccess() {};
function onError(error){
  console.error(error);
};

drone.on('open',error => {
  if (error){
    return console.error(error);
  }
  room = drone.subscribe(roomName);
  room.on('open',error => {
    if (error){
      onError(error);
    }
  });
  //We are connected to the room and received an array of members
  // connected to the room (including us). Signaling server is ready
  room.on('members',members =>{
    console.log('MEMBERS', members);
    //if we are second user to connect to the room we will be creating the offer
    const isOfferer = members.length ===2;
    startWebRTC(isOfferer);
  });
});

//Send signaling data via ScaleDrone
function sendMessage(message){
  drone.publish({
    room.roomName,
    message
  });
}

function startWebRTC(isOfferer){
  pc = new RTCPeerConnection(configuration);

  //onicecandidate notififies us whenever an Ice agent need to deliver a
  //message to the other peer through the signaling iceServers
  pc.onicecandidate = event => {
    if (event.candidate) {
      sendMessage({'candidate:event.candidate'});
    }
  };

  //if user is offerer let the negotiation needed event create the offerer
if(isOfferer) {
  pc.onnegotiationneeded =() =>{
    pc.createOffer().then(localDescCreated).catch(onError);
  }
}
//when a remote straem arrives display it in the remote video element
pc.onaddstream = event =>{
  remoteVideo.srcObject = event.stream;
};

navigator.mediaDevices.getUserMedia({
  audio: true,
  video:true,
}).then(straem => {
  //display your local video in local video element
  localVideo.srcObject=stream;
  //add your stream to be sent to the connecting
  pc.addStream(stream);
}, onError);

//listen to signaling data from scaledrone
room.on('data', (message,client) => {
  //message was sent by us
  if(client.id===drone.clientid) {
    return;
  }

if (message.sdp) {
  //This is called after receiving an offer or answer from another peer
  pc.setRemoteDescription(new RTCSessionDescription(message.sdp),()=>{
    //when reciving an offer lets answer it
    if (pc.remoteDescription.type==='offer'){
      pc.createAnswer().then(localDescCreated).catch(onError);
    }
  },onError);
}else if(message.candidate){
  //add the new lce candidate to our connections remote description
  pc.addlceCandidate(
    new RTClceCandidate(message.candidate), onSuccess, onError
  );
}
});
}

function localDescCreated(desc) {
  pc.setLocalDescription(
    desc,
    () => sendMessage({'sdp':pc.localDescription});
    onError
  );
}



}
