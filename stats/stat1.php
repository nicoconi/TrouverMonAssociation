   <script type="text/javascript">
$(document).ready(function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme1",
      title:{
        text: "Montant des subventions versées entre 2011 et 2016"
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
        { x: new Date(2011, 0), y: 9255048 },
        { x: new Date(2012, 0), y: 8841200},
        { x: new Date(2013, 0), y: 8861669},
        { x: new Date(2014, 0), y: 8761320, indexLabel: "Plus petit",markerColor: "#37358C", markerType: "cross" },
        { x: new Date(2015, 0), y: 20809634, indexLabel: "Plus grand",markerColor: "#E61937", markerType: "triangle"},
        { x: new Date(2016, 0), y: 18680399}
        
        ]
      }
      
      
      ]
    });

chart.render();
});
</script>



  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>




