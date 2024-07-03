import { useEffect, useState } from "react";
// import reactLogo from "./assets/react.svg";
// import viteLogo from "/vite.svg";
import "./App.css";
import axios from "axios";

function App() {
  const [messageText, setMessageText] = useState("");

  // useEffect(() => {
  //   window.Echo.join(`online`)
  //     .here((users) => {
  //       console.log({ users });
  //     })
  //     .joining((user) => {
  //       console.log(user.name);
  //     })
  //     .leaving((user) => {
  //       console.log(user.name);
  //     })
  //     .error((error) => {
  //       console.error(error);
  //     });
  // }, []);

  useEffect(() => {
    window.Echo.private("channel_for_everyone").listen("GotMessage", (e) => {
      console.log({ e });
      console.log({ broadcasted_message: e.message.text });
    });

    return () => {
      window.Echo.leave("channel_for_everyone");
    };
  }, []);

  const broadcastMessage = async (e) => {
    e.preventDefault();

    if (messageText.trim() === "") return;

    setMessageText("");

    try {
      await axios.post(
        `http://127.0.0.1:8000/api/message`,
        {
          text: messageText,
        },
        {
          headers: {
            Authorization: `Bearer 1|f6gjyUJubWnTYUEkJYTq3JHJLiaYbqRFCaBLzoJpfffe3de9`,
          },
        }
      );
    } catch (err) {
      console.log(err.message);
    }

    // console.log({ messageText });
  };

  return (
    <>
      <form className="my-20 w-80 mx-auto" onSubmit={broadcastMessage}>
        <div className="relative">
          <label htmlFor="UserEmail" className="sr-only">
            {" "}
            Email{" "}
          </label>

          <input
            type="text"
            id="UserEmail"
            placeholder="Write a message"
            className="w-full rounded-md border-gray-200 pe-10 shadow-sm sm:text-sm"
            value={messageText}
            onChange={(e) => setMessageText(e.target.value)}
          />
        </div>
      </form>
    </>
  );
}

export default App;
