    <script type="text/javascript">
$(document).ready(function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme1",
      title:{
        text: "Nombre d'associations ayant reçu des subventions entre 2011 et 2016"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "YYYY",
        interval:1,
        intervalType: "year"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "line",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2011, 0), y: 1183 },
        { x: new Date(2012, 0), y: 1220},
        { x: new Date(2013, 0), y: 1172},
        { x: new Date(2014, 0), y: 1010, indexLabel: "Plus petit",markerColor: "#37358C", markerType: "cross" },
        { x: new Date(2015, 0), y: 1273, indexLabel: "Plus grand",markerColor: "#E61937", markerType: "triangle"},
        { x: new Date(2016, 0), y: 1084}
        
        ]
      }
      
      
      ]
    });

chart.render();
});
</script>
<script type="text/javascript" src="canvasjs-1.9.8/canvasjs.min.js"></script></head>
  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>


