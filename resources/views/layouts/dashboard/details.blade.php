@extends('layouts.layout')
@section('dashcontent')

    <div>
        <div class="row">
            <div class="col-md-4 col-12  my-2 my-md-0">
                <div class="card card-1">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h5>All Users</h5>
                            <h3>{{ $users->count() }}</h3>
                        </div>
                        <div>
                            <span class="material-icons-sharp user-icon">
                                person
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card card-2  my-2 my-md-0">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h5>All Posts</h5>
                            <h3>{{ $posts->count() }}</h3>
                        </div>
                        <div>
                            <span class="material-icons-sharp user-icon">
                                list_alt
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card card-3  my-2 my-md-0">
                    <div class="p-3 d-flex justify-content-between">
                        <div>
                            <h5>All Comments</h5>
                            <h3>{{ $comments->count() }}</h3>
                        </div>
                        <div>
                            <span class="material-icons-sharp user-icon">
                                mode_comment
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5 row">
            <div class="col-12 col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Posts</h5>
                    </div>
                    <div class="p-2">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5"  style="height: 350px">
                <div class="card">
                    <div class="card-header">
                        <h5>Users</h5>
                    </div>
                    <div class="p-2">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <table class="table table-light" style="border: 1px solid rgb(180, 180, 180)">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">comments</th>
                        <th scope="col">date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts->take(10) as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $post->work_name }}</td>
                                <td>{{ $post->comments->count() }}</td>
                                <td>{{ $post->created_at }}</td>
                             </tr>
                        @empty
                        @endforelse
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>







    <script>
        // Get the canvas element
        var ctx = document.getElementById('myChart').getContext('2d');
        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // Get the canvas element
var ctx1 = document.getElementById('myChart1').getContext('2d');

// Create the chart
var myChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>
    @endsection