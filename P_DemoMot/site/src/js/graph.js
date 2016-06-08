/**
 * Created by carbonarch on 08.06.16.
 */



AmCharts.makeChart("chartdiv",
    {
        "type": "serial",
        "categoryField": "category",
        "angle": 1,
        "autoMarginOffset": 40,
        "depth3D": 1,
        "marginRight": 60,
        "marginTop": 60,
        "colors": [
            "#6495ED",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000",
            "#000000"
        ],
        "startDuration": 1,
        "fontFamily": "Copperplate",
        "theme": "dark",
        "categoryAxis": {
            "autoRotateAngle": 0,
            "autoRotateCount": 0,
            "forceShowField": "",
            "dashLength": 0,
            "gridCount": 7,
            "title": "Graphique sur l'exercice",
            "titleColor": "#70C6F1",
            "titleFontSize": 15,
            "titleRotation": 0
        },
        "trendLines": [],
        "graphs": [
            {
                "balloonText": "[[title]] of [[category]]:[[value]]",
                "bullet": "round",
                "bulletSize": 10,
                "id": "AmGraph-1",
                "lineAlpha": 1,
                "lineThickness": 3,
                "title": "graph 1",
                "type": "smoothedLine",
                "valueField": "column-1"
            }
        ],
        "guides": [],
        "valueAxes": [
            {
                "id": "idExerciseGraph",
                "stackType": "regular",
                "title": "Titre",
                "titleColor": "#70C6F1",
                "titleFontSize": 15
            }
        ],
        "allLabels": [],
        "balloon": {},
        "titles": [],
        "dataProvider": [
            {
                "category": "category 1",
                "column-1": 8,
                "column-2": 5
            },
            {
                "category": "category 2",
                "column-1": 6,
                "column-2": 7
            },
            {
                "category": "category 3",
                "column-1": 2,
                "column-2": 3
            },
            {
                "category": "category 4",
                "column-1": 1,
                "column-2": 3
            },
            {
                "category": "category 5",
                "column-1": 2,
                "column-2": 1
            },
            {
                "category": "category 6",
                "column-1": 3,
                "column-2": 2
            },
            {
                "category": "category 7",
                "column-1": 6,
                "column-2": 8
            }
        ]
    }
);