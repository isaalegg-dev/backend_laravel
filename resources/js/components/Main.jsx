import React from 'react'; 
import ReactDOM from 'react-dom/client';
import AppRouter from './Nav';
import '../../css/nav.css'
import '../../css/table.css'


function Main() {

    return (
        <div className="container">
            <AppRouter />
        </div>
    );
}

export default Main;

if (document.getElementById('main')) {
    const Index = ReactDOM.createRoot(document.getElementById("main"));

    Index.render(
        <React.StrictMode>
            <Main/>
        </React.StrictMode>
    )
}
