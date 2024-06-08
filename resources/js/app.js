import './bootstrap';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: true,
    encrypted: true
});

// Récupérez l'ID utilisateur de manière dynamique en le passant du backend au frontend
let userId = document.head.querySelector('meta[name="user-id"]').content;

window.Echo.private(`waiter-calls.${userId}`)
    .listen('CallWaiter', (event) => {
        console.log(event.message);
        // Ajoutez du code ici pour afficher la notification dans le tableau de bord
        alert(event.message);
    });
