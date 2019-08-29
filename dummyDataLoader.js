var json = {
    "threads": [
        {
            "Started_By": "dark_horse",
            "Title": "Do we have to submit JYC fees every semester?",
            "Date_Posted": "23-07-2018",
            "Replies": 34
        },
        {
            "Started_By": "RajuB99",
            "Title": "Datesheet for T1 exams?",
            "Date_Posted": "24-08-2017",
            "Replies": 4
        },
        {
            "Started_By": "ganesh",
            "Title": "How can I apply for leave?",
            "Date_Posted": "02-11-2018",
            "Replies": 17
        }
    ]
};

var count = Object.keys(json.threads).length;
var tableContent = "";

for(i = 0; i < count; i++) {
    tableContent = tableContent + "<tr><td class='two columns'>" + json.threads[i].Started_By +
    "</td><td class='six columns'>" + json.threads[i].Title +
    "</td><td class='two columns'>" + json.threads[i].Date_Posted +
    "</td><td class='two columns'>" + json.threads[i].Replies +
    "</td></tr>"
}

document.getElementById("tableContent").innerHTML = tableContent;