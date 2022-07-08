// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
 importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
  apiKey: "AIzaSyBDDL44Xnl6QtpCqLmMvxB00GYL276HWfY",
  authDomain: "test683-430b9.firebaseapp.com",
  projectId: "test683-430b9",
  storageBucket: "test683-430b9.appspot.com",
  messagingSenderId: "353829315143",
  appId: "1:353829315143:web:8cfe79961d688177c58762",
  measurementId: "G-VDC6F63M9T"
});


// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);

    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };

    console.log(payload);
    return self.registration.showNotification(
        title,
        options,
    );
});