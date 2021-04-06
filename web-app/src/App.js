import AppBar from '@material-ui/core/AppBar';
import Typography from '@material-ui/core/Typography';
import Toolbar from '@material-ui/core/Toolbar';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import Articoli from './pages/Articoli';
import Questionario from './pages/Questionario';

function App() {
  return (
    <div className="App">
      <AppBar position="static">
        <Toolbar>
          <Typography variant="h6">
            Umana Academy Web App
          </Typography>
        </Toolbar>
      </AppBar>
      <Router>
        <Switch>
          <Route exact path="/" component={Articoli} />
          <Route exact path="/questionario" component={Questionario} />
        </Switch>
      </Router>
    </div>
  );
}

export default App;
