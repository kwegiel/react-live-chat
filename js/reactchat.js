function tick() {
  const element = (
    React.createElement("h3", null, React.createElement("b", null, new Date().toLocaleTimeString()))
  );
  ReactDOM.render(
    element,
    document.getElementById('reactchat')
  );
}

setInterval(tick, 1000);