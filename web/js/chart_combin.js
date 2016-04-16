function gen_combin (obj, base, xvalue, yvalue) {
    // แสดงใน console ของ firebug
    /*
    console.log(xvalue);
    console.log(yvalue);
    */
    var renderer = new Highcharts.Renderer(
        obj[0],
        400,
        300
    ),
    rect = renderer.rect(100, 100, 100, 100, 5)
        .add();
    obj.highcharts({
        title: {
            text: 'ตัวชี้วัด'
        },
        credits: {"enabled": false},
        xAxis: {
            categories: xvalue
        },
        yAxis: {
            title: {text:'จำนวน'}
        },
        labels: {
            items: [{
                html: '',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'ผลงาน',
            color: '#50B432',
            data: yvalue
        },{
            type: 'spline',
            name: 'เป้าหมาย',
            data: base,
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
    }]// จบ content
    });// จบ chart
    $("rect").attr("stroke-width", "0");
}
