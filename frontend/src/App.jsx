import { useEffect, useState } from "react";
import "./App.css";

function App() {
  const [fraseRGC, setFraseRGC] = useState("");

  useEffect(() => {
    fetch("/api/RGC")
      .then((res) => res.json())
      .then((data) => setFraseRGC(data.fraseRGC));
  }, []);
  
  return (
    <div>
      <h1>Frontend en React de Raúl González Caro</h1>
      <p>
        Esta aplicación se conecta al backend de Symfony pidiéndole una
        respuesta
      </p>
      <p>Respuesta del Backend: {fraseRGC || "Esperando la respuesta, esto puede tardar un rato"}</p>
    </div>
  );
}
export default App;
