import { useEffect, useState } from "react";
import "./App.css";
import axios from "axios";

function App() {
  const [messageText, setMessageText] = useState("");

  useEffect(() => {
    window.Echo.join(`online`)
      .here((users) => {
        console.log({ users });
      })
      .joining((user) => {
        console.log(user.name);
      })
      .leaving((user) => {
        console.log(user.name);
      })
      .error((error) => {
        console.error(error);
      });
  }, []);

  const handleMessageBroadCast = async (e) => {
    e.preventDefault();

    if (messageText.trim() === "") return;

    try {
      await axios.post(
        `http://127.0.0.1:8000/api/message`,
        {
          text: messageText,
        },
        {
          headers: {
            Authorization: `Bearer ${localStorage.getItem("token")}`,
          },
        }
      );

      setMessageText("");
    } catch (err) {
      console.log(err.message);
    }
  };

  useEffect(() => {
    window.Echo.private("channel_for_everyone").listen(
      "GotMessage",
      async (e) => {
        // e.message
        console.log({ e });
      }
    );

    return () => {
      window.Echo.leave("channel_for_everyone");
    };
  }, []);

  return (
    <>
      <form onSubmit={handleMessageBroadCast}>
        <input
          type="text"
          value={messageText}
          onChange={(e) => setMessageText(e.target.value)}
        />
      </form>
    </>
  );
}

export default App;
