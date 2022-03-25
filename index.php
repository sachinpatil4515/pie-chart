<!DOCTYPE html>
<html>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <body>
    <canvas id="myChart" style="width: 100%; max-width: 600px"></canvas>

    <script>
      new Chart("myChart", {
        type: "pie",
        data: {
          labels: ["Work", "Eat", "Commute", "Watch TV", "Sleep"],
          datasets: [
            {
              backgroundColor: [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145",
              ],
              data: [11, 2, 2, 2, 7],
            },
          ],
        },
        options: {
          title: {
            display: true,
            text: "My Daily Activities",
          },
        },
      });
    </script>
  </body>
</html>
