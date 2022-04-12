// Add Firebase products that you want to use
/*importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

// Firebase SDK
firebase.initializeApp({
    apiKey: "AIzaSyATnR4JcBzCu6PZjrZDd2xRxLn0rSK64gI",
      authDomain: "fcm-notification-c28f1.firebaseapp.com",
      projectId: "fcm-notification-c28f1",
      storageBucket: "fcm-notification-c28f1.appspot.com",
      messagingSenderId: "820984949094",
      appId: "1:820984949094:web:29d6a60537f16380bd40a7",
      measurementId: "G-RNKXMW5VP7",
});

const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message has received : ", payload);
    const title = "First, solve the problem.";
    const options = {
        body: "Push notificaiton!",
        icon: "/icon.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});*/

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCRXOCHp94nS9dtyjgIXWeXw85L7LpaTlw",
  authDomain: "fitmama-8f2af.firebaseapp.com",
  projectId: "fitmama-8f2af",
  storageBucket: "fitmama-8f2af.appspot.com",
  messagingSenderId: "627241827614",
  appId: "1:627241827614:web:710558c3000df12e7fdd0f",
  measurementId: "G-LRNKRHR89F"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);