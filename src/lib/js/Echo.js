import Echo from "laravel-echo";
import axios from "axios";

import Pusher from "pusher-js";
window.Pusher = Pusher;

window.Echo = new Echo({
  broadcaster: "reverb",
  key: import.meta.env.VITE_REVERB_APP_KEY,
  wsHost: import.meta.env.VITE_REVERB_HOST,
  wsPort: import.meta.env.VITE_REVERB_PORT,
  wssPort: import.meta.env.VITE_REVERB_PORT,
  forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? "https") === "https",
  authorizer: (channel, options) => {
    return {
      authorize: (socketId, callback) => {
        // console.log( channel.name );
        axios
          .post(
            "http://127.0.0.1:8000/api/broadcasting/auth",
            {
              socket_id: socketId,
              channel_name: channel.name,
            },
            {
              headers: {
                Authorization: `Bearer 1|f6gjyUJubWnTYUEkJYTq3JHJLiaYbqRFCaBLzoJpfffe3de9`,
              },
            }
          )
          .then((response) => {
            callback(false, response.data);
          })
          .catch((error) => {
            callback(true, error);
          });
      },
    };
  },
  enabledTransports: ["ws", "wss"],
});
