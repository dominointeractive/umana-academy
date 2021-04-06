import React from 'react';
import Box from '@material-ui/core/Box';
import { makeStyles } from '@material-ui/core/styles';
import Card from '@material-ui/core/Card';
import CardContent from '@material-ui/core/CardContent';
import CardMedia from '@material-ui/core/CardMedia';
import Typography from '@material-ui/core/Typography';
import Alert from '@material-ui/lab/Alert';
import useAxios from 'axios-hooks';

const useStyles = makeStyles({
  root: {
    width: 345,
    maxWidth: '100%',
  },
  card: {
    marginBottom: '30px',
  },
  media: {
    height: 140,
  },
});

function Articolo(props) {
  const classes = useStyles();
  const {title, image, body} = props;

  return <Card className={classes.card}>
    {!!image && <CardMedia
      className={classes.media}
      image={image}
      title={title}
    />}
    <CardContent>
      <Typography gutterBottom variant="h5" component="h2">
        {title}
      </Typography>
      {!!body && <Typography variant="body2" color="textSecondary" component="div" dangerouslySetInnerHTML={{__html: body}}>
      </Typography>}
    </CardContent>
  </Card>
}

function Articoli() {
  const classes = useStyles();
  const [{ data, loading, error }] = useAxios(process.env.REACT_APP_API_BASE_PATH + '/articoli/rest?_format=json');

  return <React.Fragment>
    <Box mt={3} display="flex" justifyContent="center">
      <div className={classes.root}>
        {loading ? 'Caricamento...' : null}
        {error ? <Alert severity="error">{error.toString()}</Alert> : null}
        {data ? data.map((articolo, i) => {
          return <Articolo
            key={i}
            title={articolo.title[0] ? articolo.title[0].value : null}
            body={articolo.body[0] ? articolo.body[0].processed : null}
            image={articolo.field_image[0] ? articolo.field_image[0].url : null}
          />
        }) : null}
      </div>
    </Box>
  </React.Fragment>;
}

export default Articoli;
