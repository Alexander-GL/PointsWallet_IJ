const app = new Vue({
    el: "#app",
    data: () => ({
        view: false,
        expenses: [{
                type: "income",
                date: "2020/06/02",
                amount: 300,
                title: "OK"
            },
            {
                type: "outcome",
                date: "2020/09/27",
                amount: 100,
                title: "NOK"
            }
        ]
    })
});