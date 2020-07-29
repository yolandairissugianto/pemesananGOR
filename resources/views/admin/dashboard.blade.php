@extends('admin.templates.default')

@section('content')
<div class="content-wrapper">
    
  <div class="card">
    <div>
      <div class="card-body">
        <h4 class="card-title">Admin Dashboard</h4>
        <div class="row">
          <div class="col-12">
            <div id="chart"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>    
<script>

const url = '{{ config('app.url') }}'
const month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

function getData(){
    return fetch(url+'/admin/chart').then(res => res.json()).then(res => res);
}

(async function showChart() {
    const data = await getData();
   console.log(data);

    const series = data.map(d => {
     const result = month.map((m , i) => {
        return d.pemesanan.filter(p => p.month == i+1).map(p => p.total).join();   
     })

        
        return {
            name : d.nama_fasilitas,
            data : result.map(r => r == '' ? 0 : +r)
        }
    })


    console.log(series);


    const options = {
        series : series,
          chart: {
            type: 'bar',
            height: 350,
            stacked: true,
            foreColor: "#fff",
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
          },
        },
        xaxis: {
          type: 'category',
          categories: month,
          
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
}())


</script>
@endsection