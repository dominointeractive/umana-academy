import React, {useEffect, useMemo} from 'react';
import Box from '@material-ui/core/Box';
import Alert from '@material-ui/lab/Alert';
import { makeStyles } from '@material-ui/core/styles';
import useAxios from 'axios-hooks';
import Highcharts from 'highcharts/highstock';
import HighchartsReact from 'highcharts-react-official';

const useStyles = makeStyles({
  root: {
    width: 600,
    maxWidth: '100%',
  },
});

function Grafico(props) {
  const {data} = props;

  const chartData = useMemo(() => {
    const groups = {};

    data.forEach(item => {
      const title = item.title[0].value.toLowerCase().trim();

      if (!groups[title]) {
        groups[title] = {
          name: title,
          count: 0,
        };
      }

      groups[title].count++;
    });

    return Object.keys(groups).map(key => {
      return {
        name: groups[key].name,
        y: groups[key].count,
      }
    });
  }, [data]);

  const options = {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Squadre preferite'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
        }
      }
    },
    series: [{
      name: 'Risposte',
      colorByPoint: true,
      data: chartData,
    }]
  };

  return <React.Fragment>
    <HighchartsReact
      highcharts={Highcharts}
      options={options}
    />
  </React.Fragment>;
}

function Questionario() {
  const classes = useStyles();
    const [{ data, error }, refetch] = useAxios(process.env.REACT_APP_API_BASE_PATH + '/risposte/rest?_format=json');

    useEffect(() => {
      setTimeout(refetch, 5000);
    }, [data]);

    return <React.Fragment>
      <Box mt={3} display="flex" justifyContent="center">
        <div className={classes.root}>
          {error ? <Alert severity="error">{error.toString()}</Alert> : null}
          {data ? <Grafico data={data} /> : null}
        </div>
      </Box>
    </React.Fragment>;
}

export default Questionario;
